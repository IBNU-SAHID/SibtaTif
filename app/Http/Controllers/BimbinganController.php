<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BimbinganController extends Controller
{
    //
    public function index()
    {
        $auth_id = Auth::user()->username;
        $mahasiswa = \App\Models\bimbingan::where(
            'pembimbing_id',
            $auth_id
        )->get();

        return view('/dosen/bimbingan')->with('data', $mahasiswa);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => ['required', 'max:11', 'min:11'],
            'statusPembimbing' => ['required'],
        ]);

        $me = Auth::user()->username;

        $bimbingan = new \App\Models\bimbingan();
        $bimbingan->nim = $request->nim;
        $bimbingan->pembimbing_id = $me;
        $bimbingan->statusPembimbing = $request->statusPembimbing;
        $bimbingan->save();

        if ($bimbingan->pembimbing_id == $me) {
            return redirect('bimbingan')->with(
                'addError',
                'Anda sudah menjadi pembimbing mahasiswa ini'
            );
        }
        $bimbingan->save();

        return redirect('dosen/bimbingan');
    }
}
