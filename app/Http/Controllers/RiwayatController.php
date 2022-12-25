<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => ['required'],
            'catatan' => ['required'],
            'pembimbing' => ['required'],
        ]);

        $auth_id = Auth::user()->username;
        $riwayat = new \App\Models\riwayat_bimbingan();
        $riwayat->nim = $auth_id;
        $riwayat->pembimbing_id = $request->pembimbing;
        $riwayat->tanggal = $request->tanggal;
        $riwayat->catatan = $request->catatan;
        $riwayat->status = '0';
        $riwayat->save();

        return redirect('/mahasiswa/bimbingan');
    }
}
