<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Tool;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function __construct()
    {
        // Pastikan hanya pengguna yang sudah login dapat mengakses controller ini
        $this->middleware('auth');
    }

    // Form peminjaman alat
    public function create()
    {
        $tools = Tool::where('status', 'available')->get();

        // Ambil tanggal yang sudah dipesan
        $bookedDates = Loan::where('status', 'approved')
            ->get()
            ->flatMap(function ($loan) {
                return $this->generateDateRange($loan->start_date, $loan->end_date);
            })
            ->toArray();

        return view('pinjam.borrow', compact('tools', 'bookedDates'));
    }

    // Simpan data peminjaman
    public function store(Request $request)
    {
        $request->validate([
            'tool_id' => 'required|exists:tools,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        // Periksa apakah tanggal sudah dipesan
        $bookedDates = Loan::where('status', 'approved')
            ->get()
            ->flatMap(function ($loan) {
                return $this->generateDateRange($loan->start_date, $loan->end_date);
            })
            ->toArray();

        $requestedDates = $this->generateDateRange($request->start_date, $request->end_date);

        foreach ($requestedDates as $date) {
            if (in_array($date, $bookedDates)) {
                return back()->withErrors(['start_date' => 'Tanggal ini sudah dipesan.'])->withInput();
            }
        }

        // Simpan data peminjaman
        $loan = Loan::create([
            'tool_id' => $request->tool_id,
            'user_id' => auth()->id(),
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => 'pending',
        ]);

        // Arahkan ke halaman upload bukti pembayaran
        return redirect()->route('loans.payment', $loan->id);
    }

    // Tampilkan halaman upload bukti pembayaran
    public function paymentForm(Loan $loan)
    {
        // Pastikan hanya pemilik peminjaman yang dapat mengakses halaman ini
        $this->authorize('update', $loan);

        return view('pinjam.payment', compact('loan'));
    }

    // Upload bukti pembayaran
    public function uploadPayment(Request $request, Loan $loan)
    {
        $request->validate([
            'payment_proof' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan file gambar ke dalam folder storage
        $fileName = time() . '_' . $request->file('payment_proof')->getClientOriginalName();
        $request->file('payment_proof')->storeAs('public/payment_proofs', $fileName);

        // Simpan nama file ke database
        $loan->update(['payment_proof' => $fileName]);

        return redirect()->route('loans.create')->with('success', 'Bukti pembayaran berhasil diupload.');
    }

    // Riwayat peminjaman pengguna
    public function history()
    {
        $loans = Loan::with('tool')->where('user_id', auth()->id())->get();
        return view('pinjam.history', compact('loans'));
    }

    public function adminIndex()
    {
        $loans = Loan::with('tool', 'user')->get(); // Pastikan ini memuat semua data, termasuk payment_proof
        return view('admin.loans.index', compact('loans'));
    }
    

    // Admin menyetujui peminjaman
    public function approve(Loan $loan)
    {
        $loan->update(['status' => 'approved']);
        return back()->with('success', 'Peminjaman telah disetujui.');
    }

    // Admin menolak peminjaman
    public function reject(Loan $loan)
    {
        $loan->update(['status' => 'rejected']);
        Tool::where('id', $loan->tool_id)->update(['status' => 'available']);
        return back()->with('success', 'Peminjaman telah ditolak.');
    }

    // Membuat rentang tanggal
    private function generateDateRange($start_date, $end_date)
    {
        $dates = [];
        $current = strtotime($start_date);
        $end = strtotime($end_date);

        while ($current <= $end) {
            $dates[] = date('Y-m-d', $current);
            $current = strtotime('+1 day', $current);
        }

        return $dates;
    }
}
