<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */

     public function store(Request $request): RedirectResponse
     {
         $credentials = $request->validate([
             'email' => ['required', 'email'],
             'password' => ['required'],
         ]);
     
         if (Auth::attempt($credentials, $request->filled('remember'))) {
             $request->session()->regenerate();
     
             // Redirect berdasarkan role
             if (Auth::user()->role === 'admin') {
                 return redirect('/admin/dashboard'); // Admin ke dashboard
             }
     
             return redirect('/landing'); // Pengguna biasa ke landing
         }
     
         return back()->withErrors([
             'email' => 'The provided credentials do not match our records.',
         ])->onlyInput('email');
     }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        // Logout user
        Auth::guard('web')->logout();
    
        // Invalidate session
        $request->session()->invalidate();
    
        // Regenerate CSRF token
        $request->session()->regenerateToken();
    
        return redirect('/'); // Redirect ke halaman landing atau login
    }
}
