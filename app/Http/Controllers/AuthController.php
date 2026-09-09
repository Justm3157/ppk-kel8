<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            // Cek role untuk arahkan ke dashboard yang sesuai (opsional, tergantung kesepakatan)
            return redirect()->intended('dashboard'); 
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}

// Route bawaan
Route::get('/', function () {
    return view('welcome');
});

// --- ROUTE UNTUK SRS-01 ---

// 1. Route untuk Autentikasi (Login & Logout)
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

// 2. Route untuk Admin (Manajemen Akun)
Route::get('/admin/users', [UserController::class, 'index']); // Melihat daftar user
Route::post('/admin/users', [UserController::class, 'store']); // Menambah user baru
Route::delete('/admin/users/{id}', [UserController::class, 'destroy']); // Menghapus user