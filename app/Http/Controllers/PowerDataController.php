<?php

namespace App\Http\Controllers;

use App\Models\PowerData;
use Illuminate\Http\Request;

class PowerDataController extends Controller
{
    public function index()
    {
        $powerData = PowerData::all();
        return view('power_data.index', compact('powerData'));
    }

    public function create()
    {
        return view('power_data.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'month' => 'required|string|max:255',
            'power' => 'required|numeric',
        ]);

        PowerData::create($request->all());

        return redirect()->route('power_data.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $powerData = PowerData::findOrFail($id); // Ambil data berdasarkan ID
        return view('power_data.edit', compact('powerData')); // Kirim ke view
    }
    
    public function update(Request $request, PowerData $powerDatum)
    {
        $request->validate([
            'month' => 'required|string|max:255',
            'power' => 'required|numeric',
        ]);

        $powerDatum->update($request->all());

        return redirect()->route('power_data.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(PowerData $powerDatum)
    {
        $powerDatum->delete();

        return redirect()->route('power_data.index')->with('success', 'Data berhasil dihapus.');
    }
}
