<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('masuk');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => ['required', 'regex:/^[0-9]+$/'],
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->role == 'mahasiswa') {
                return redirect()->intended('mahasiswa/bimbingan');
            } elseif (Auth::user()->role == 'dosen') {
                return redirect()->intended('/dosen');
            } elseif (Auth::user()->role == 'kordinator') {
                return redirect()->intended('/dashboard');
            }
        }

        return back()->with('loginError', 'Username atau Password Salah!');
    }
}
