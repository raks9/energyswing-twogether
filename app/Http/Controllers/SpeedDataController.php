<?php

namespace App\Http\Controllers;

use App\Models\SpeedData;
use Illuminate\Http\Request;

class SpeedDataController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel SpeedData
        $speedData = SpeedData::all();

        // Kirim data ke view
        return view('speed_data.index', compact('speedData'));
    }

    // Method lain untuk CRUD
    public function create()
    {
        return view('speed_data.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'month' => 'required|string|max:255',
            'speed' => 'required|numeric',
        ]);

        SpeedData::create($request->all());

        return redirect()->route('speed_data.index')->with('success', 'Data kecepatan berhasil ditambahkan.');
    }

    public function edit(SpeedData $speedDatum)
    {
        return view('speed_data.edit', ['speedData' => $speedDatum]);
    }
    
    
    public function update(Request $request, SpeedData $speedDatum)
    {
        $request->validate([
            'month' => 'required|string|max:255',
            'speed' => 'required|numeric',
        ]);
    
        $speedDatum->update($request->all());
    
        return redirect()->route('speed_data.index')->with('success', 'Data berhasil diperbarui');
    }
    
    

    public function destroy(SpeedData $speedDatum)
    {
        $speedDatum->delete();
    
        return redirect()->route('speed_data.index')->with('success', 'Data berhasil dihapus.');
    }
    
}
