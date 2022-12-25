<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BimbinganController extends Controller
{
    //
    public function mahasiswaSedangBimbingan()
    {
        $auth_id = Auth::user()->username;

        $mahasiswa = \App\Models\bimbingan::where('pembimbing_id', $auth_id)
            ->where('statusMahasiswa', '1')
            ->paginate(5);

        return view('/dosen/mahasiswaSedangBimbingan')->with(
            'data',
            $mahasiswa
        );
    }

    public function mahasiswaSelesaiBimbingan()
    {
        $auth_id = Auth::user()->username;

        $mahasiswa = \App\Models\bimbingan::where('pembimbing_id', $auth_id)
            ->where('statusMahasiswa', '2')
            ->paginate(5);

        return view('/dosen/mahasiswaSelesaiBimbingan')->with(
            'data',
            $mahasiswa
        );
    }

    public function statusSelesai()
    {
        $auth_id = Auth::user()->username;
        $bimbingan = DB::table('bimbingans')
            ->where('nim', $auth_id)
            ->update(['statusMahasiswa' => '2']);

        return redirect('mahasiswa/bimbingan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => ['required', 'max:11', 'min:11'],
            'statusPembimbing' => ['required'],
        ]);

        $me = Auth::user()->username;

        $bimbingan = new \App\Models\bimbingan();
        $cek = \App\Models\bimbingan::where('nim', $request->nim)->first();

        if ($cek->pembimbing_id == null) {
            if ($cek->pembimbing_id == $me) {
                Session::flash(
                    'alert-danger',
                    'Anda sudah menjadi pembimbing mahasiswa ini'
                );
                return redirect('dosen/bimbingan');
            } else {
                $bimbingan->nim = $request->nim;
                $bimbingan->pembimbing_id = $me;
                $bimbingan->statusPembimbing = $request->statusPembimbing;
                $bimbingan->statusMahasiswa = '1';
                $bimbingan->save();

                return redirect('dosen/mahasiswaSedangBimbingan');
            }
        }
    }
}
