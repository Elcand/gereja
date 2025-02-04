<?php

namespace App\Http\Controllers;

use App\Rules\LoginCheck;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required|min:8',
            ],
            [
                'password.required' => 'Kata sandi wajib diisi.',
                'password.min' => 'Kata sandi minimal 8 karakter.',
            ]
        );
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->with('LoginError', 'Login Gagal, Periksa kembali Akun Anda!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect()->route('login');
    }

    // public function process(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => ['required|min:8', new LoginCheck($request)]
    //     ]);
    // }
}
