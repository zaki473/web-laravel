<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // Cari pengguna berdasarkan email
        $user = User::where('email', $request->email)->first();
        // Cek apakah pengguna ditemukan dan password cocok
        if ($user && Hash::check($request->password, $user->password)) {

            // Login pengguna
            Auth::login($user);

            // Redirect ke halaman dashboard
            return redirect()->intended('profil');
        }

        // Jika login gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    // Logout pengguna
    public function logout()
    {
        auth::logout();

        return redirect()->route('login');
    }


    public function showProfil()
    {
        // Mengambil data pengguna yang sedang login
        $user = auth::user();

        // Mengirim data pengguna ke view
        return view('auth.profil', compact('user'));
    }
}
