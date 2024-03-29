<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardDosenController extends Controller
{
    //
    public function index()
    {
        $auth_id = Auth::user()->username;
        $mhsBimbingan = \App\Models\bimbingan::where('pembimbing_id', $auth_id)
            ->where('statusMahasiswa', '1')
            ->count();
        $mhsSelesai = \App\Models\bimbingan::where('pembimbing_id', $auth_id)
            ->where('statusMahasiswa', '2')
            ->count();

        $mhs = \App\Models\riwayat_bimbingan::with('mahasiswa')
            ->where('pembimbing_id', $auth_id)
            ->where('status', '0')
            ->get();

        return view('/dosen/dashboard')
            ->with('data', $mhs)
            ->with('mhsBimbingan', $mhsBimbingan)
            ->with('mhsSelesai', $mhsSelesai);
    }

    public function konfirmasi(Request $request)
    {
        $auth_id = Auth::user()->username;
        $mahasiswa = $request->input('mahasiswa');
        $tanggal = $request->input('tanggal');
        $riwayat = \App\Models\riwayat_bimbingan::where('tanggal', $tanggal)
            ->where('nim', $mahasiswa)
            ->where('pembimbing_id', $auth_id)
            ->where('status', '0')
            ->first();
        $riwayat->status = '1';
        $riwayat->save();
        return redirect('/dosen');
    }
}
