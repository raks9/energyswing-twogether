<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq; // Pastikan model Faq diimport jika digunakan

class HomeController extends Controller
{
    /**
     * Method untuk halaman landing.
     */
    public function landing()
    {
        // Ambil semua data FAQ dari database
        $faqs = Faq::all();

        // Kirim data FAQ ke view landing.blade.php
        return view('landing', compact('faqs'));
    }
}
