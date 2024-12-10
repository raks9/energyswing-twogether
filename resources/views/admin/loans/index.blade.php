<h1>Daftar Peminjaman</h1>

<table border="1">
    <thead>
        <tr>
            <th>Nama Alat</th>
            <th>Pengguna</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Selesai</th>
            <th>Status</th>
            <th>Bukti Pembayaran</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($loans as $loan)
        <tr>
            <td>{{ $loan->tool->name }}</td>
            <td>{{ $loan->user->name }}</td>
            <td>{{ $loan->start_date }}</td>
            <td>{{ $loan->end_date }}</td>
            <td>{{ $loan->status }}</td>
<td>
    @if ($loan->payment_proof)
        <img src="{{ asset('storage/payment_proofs/' . $loan->payment_proof) }}" alt="Bukti Pembayaran" width="100">
    @else
        Belum ada
    @endif
</td>

            <td>
                <form action="{{ route('admin.loans.approve', $loan->id) }}" method="POST">
                    @csrf
                    <button type="submit">Setujui</button>
                </form>
                <form action="{{ route('admin.loans.reject', $loan->id) }}" method="POST">
                    @csrf
                    <button type="submit">Tolak</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
