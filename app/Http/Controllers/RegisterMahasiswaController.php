<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\info_ta;
use App\Models\mahasiswa;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterMahasiswaController extends Controller
{
    //
    public function index()
    {
        return view('/mahasiswa/mahasiswaDaftar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'nim' => [
                'regex:/^[0-9]+$/',
                'required',
                'max:11',
                'min:11',
                'unique:mahasiswas',
            ],
            'email' => 'required|email|unique:mahasiswas',
            'password' => 'required|min:6|max:255',
        ]);

        $request['password'] = Hash::make($request['password']);

        $user = new \App\Models\user();
        $user->name = $request->nama;
        $user->username = $request->nim;
        $user->password = $request->password;
        $user->role = 'mahasiswa';
        $user->save();

        $info_ta = new \App\Models\info_ta();
        $info_ta->judul = $request->judul;
        $info_ta->deskripsi = $request->deskripsi;
        $info_ta->jenis_ta = $request->jenis_ta;
        $info_ta->save();

        $mahasiswa = new \App\Models\mahasiswa();
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->jenisKelamin = $request->jenisKelamin;
        $mahasiswa->email = $request->email;
        $mahasiswa->telepon = $request->telepon;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->info_ta_id = $info_ta->id;
        $mahasiswa->save();

        $bimbingan = new \App\Models\bimbingan();
        $bimbingan->save();
        return redirect('/');
    }
}
