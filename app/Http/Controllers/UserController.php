<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.home'); // Buat file blade di resources/views/user/home.blade.php
    }
    
}
