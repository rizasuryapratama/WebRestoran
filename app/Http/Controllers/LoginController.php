<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('home');
        }else{
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        // Proses autentikasi
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Regenerate session untuk keamanan
            return redirect()->route('home')->with('success', 'Login berhasil!');
        } else {
            // Jika gagal, tambahkan pesan error
            return back()->withErrors([
                'email' => 'Email atau password salah.',
            ])->withInput();
        }
    }

    /**
     * Menangani proses logout.
     * Logout pengguna dan redirect ke halaman utama.
     */
    public function actionlogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate(); // Invalidate session
        $request->session()->regenerateToken(); // Regenerate CSRF token untuk keamanan

        return redirect('/')->with('success', 'Anda telah berhasil logout.');
    }
}