<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterDosenController extends Controller
{
    //
    public function index()
    {
        return view('/dosen/dosenDaftar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'nip' => ['required', 'max:18', 'unique:dosens'],
            'email' => 'required|email|unique:dosens',
            'password' => 'required|min:6|max:255',
        ]);

        $request['password'] = Hash::make($request['password']);

        $user = new \App\Models\user();
        $user->name = $request->nama;
        $user->username = $request->nip;
        $user->password = $request->password;
        $user->role = 'dosen';
        $user->save();

        $dosen = new \App\Models\dosen();
        $dosen->nama = $request->nama;
        $dosen->nip = $request->nip;
        $dosen->jenisKelamin = $request->jenisKelamin;
        $dosen->telepon = $request->telepon;
        $dosen->email = $request->email;
        $dosen->jurusan = $request->jurusan;
        $dosen->save();

        return redirect('/');
    }
}
