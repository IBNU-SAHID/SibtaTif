<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    //
    public function index()
    {
        $auth_id = Auth::user()->username;
        $mahasiswa = \App\Models\mahasiswa::where('nim', $auth_id)->first();
        $bimbingan = \App\Models\mahasiswa::with('dosen')
            ->where('nim', $auth_id)
            ->get();
        $pembimbing1 = DB::table('bimbingans')
            ->join('dosens', 'bimbingans.pembimbing_id', '=', 'dosens.nip')
            ->where('bimbingans.nim', '=', $auth_id)
            ->where('statusPembimbing', '=', 'Pembimbing 1')
            ->select('dosens.nama', 'dosens.nip')
            ->get()
            ->map(function ($dosen) {
                return (array) $dosen;
            });

        if ($pembimbing1->isEmpty()) {
            $pembimbing1 = null;
        }

        $pembimbing2 = DB::table('bimbingans')
            ->join('dosens', 'bimbingans.pembimbing_id', '=', 'dosens.nip')
            ->where('bimbingans.nim', '=', $auth_id)
            ->where('statusPembimbing', '=', 'Pembimbing 2')
            ->select('dosens.nama', 'dosens.nip')
            ->get()
            ->map(function ($dosen) {
                return (array) $dosen;
            });

        if ($pembimbing2->isEmpty()) {
            $pembimbing2 = null;
        }

        //untuk menampilkan riwayat bimbingan
        $riwayat = \App\Models\riwayat_bimbingan::where('nim', $auth_id)->get();

        return view('/mahasiswa/bimbingan')
            ->with('data', $bimbingan)
            ->with('mahasiswa', $mahasiswa)
            ->with('pembimbing1', $pembimbing1)
            ->with('pembimbing2', $pembimbing2)
            ->with('riwayat', $riwayat);
    }

    public function listMahasiswa()
    {
        $data = \App\Models\mahasiswa::all();

        return view('/kordinator/listMahasiswa')->with('data', $data);
    }
}
