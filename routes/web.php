<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SpeedDataController;
use App\Http\Controllers\PowerDataController;
use App\Http\Controllers\TestimonialController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
})->name('home');

Route::get('/landing', function () {
    return view('landing'); // Halaman landing
})->name('landing');

// Admin routes
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});


// User routes
Route::middleware(['auth', 'auth.redirect'])->group(function () {
    Route::get('/home', [UserController::class, 'index'])->name('user.home');
});


Route::get('/pinjam', [LoanController::class, 'create'])->name('loans.create');
Route::post('/pinjam', [LoanController::class, 'store'])->name('loans.store');

Route::get('/riwayat', [LoanController::class, 'history'])->name('loans.history');

Route::get('/admin/peminjaman', [LoanController::class, 'adminIndex'])->name('admin.loans.index');
Route::post('/admin/peminjaman/{loan}/approve', [LoanController::class, 'approve'])->name('admin.loans.approve');
Route::post('/admin/peminjaman/{loan}/reject', [LoanController::class, 'reject'])->name('admin.loans.reject');

Route::get('/pinjam/bayar/{loan}', [LoanController::class, 'paymentForm'])->name('loans.payment');
Route::post('/pinjam/bayar/{loan}', [LoanController::class, 'uploadPayment'])->name('loans.payment.upload');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('faqs', FaqController::class);
});
Route::get('/landing', [HomeController::class, 'landing'])->name('landing');

Route::middleware('auth')->group(function () {
    Route::resource('speed_data', SpeedDataController::class);
});

Route::resource('power_data', PowerDataController::class);

Route::post('/signout', function () {
    Auth::logout();
    return redirect('/login'); // Tambahkan redirect manual ini
})->name('signout');

Route::get('/galeri', function () {
    return view('galeri'); // Nama file galeri.blade.php
})->name('galeri');

Route::resource('testimonials', TestimonialController::class);

// Route untuk menampilkan daftar testimoni
Route::get('admin/testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');

// Route untuk menghapus testimoni
Route::delete('admin/testimonials/{testimonial}', [TestimonialController::class, 'destroy'])->name('testimonials.destroy');

require __DIR__.'/auth.php';