<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use illuminate\pagination;
use Barryvdh\DomPDF\Facade\Pdf;

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
        $riwayat = \App\Models\riwayat_bimbingan::where(
            'nim',
            $auth_id
        )->paginate(6);

        return view('/mahasiswa/bimbinganMahasiswa')
            ->with('data', $bimbingan)
            ->with('mahasiswa', $mahasiswa)
            ->with('pembimbing1', $pembimbing1)
            ->with('pembimbing2', $pembimbing2)
            ->with('riwayat', $riwayat);
    }

    public function listMahasiswaBimbingan()
    {
        $data = \App\Models\mahasiswa::paginate(10);
        return view('/kordinator/listMahasiswa')->with('data', $data);
    }

    public function download($nim)
    {
        $mhs_nim = $nim;
        $mahasiswa = \App\Models\mahasiswa::where('nim', $nim)->first();
        $bimbingan = \App\Models\mahasiswa::with('dosen')
            ->where('nim', $nim)
            ->get();

        $pembimbing1 = DB::table('bimbingans')
            ->join('dosens', 'bimbingans.pembimbing_id', '=', 'dosens.nip')
            ->where('bimbingans.nim', '=', $nim)
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
            ->where('bimbingans.nim', '=', $nim)
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
        $riwayat = \App\Models\riwayat_bimbingan::where('nim', $nim)->get();
        return view('/form/formBimbingan')
            ->with('data', $bimbingan)
            ->with('mahasiswa', $mahasiswa)
            ->with('pembimbing1', $pembimbing1)
            ->with('pembimbing2', $pembimbing2)
            ->with('riwayat', $riwayat);
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $data = \App\Models\mahasiswa::where(
            'nama',
            'like',
            '%' . $search . '%'
        )->paginate(10);
        return view('/kordinator/listMahasiswa', ['data' => $data]);
    }

    public function lihatMahasiswa($nim)
    {
        $mhs_id = $nim;
        $mahasiswa = \App\Models\mahasiswa::where('nim', $mhs_id)->first();
        $bimbingan = \App\Models\mahasiswa::with('dosen')
            ->where('nim', $mhs_id)
            ->get();

        $pembimbing1 = DB::table('bimbingans')
            ->join('dosens', 'bimbingans.pembimbing_id', '=', 'dosens.nip')
            ->where('bimbingans.nim', '=', $mhs_id)
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
            ->where('bimbingans.nim', '=', $mhs_id)
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
        $riwayat = \App\Models\riwayat_bimbingan::where(
            'nim',
            $mhs_id
        )->paginate(5);

        if (Auth::user()->role == 'kordinator') {
            return view('kordinator/lihatMahasiswa')
                ->with('data', $bimbingan)
                ->with('mahasiswa', $mahasiswa)
                ->with('pembimbing1', $pembimbing1)
                ->with('pembimbing2', $pembimbing2)
                ->with('riwayat', $riwayat);
        } else {
            return view('dosen/lihatMahasiswa')
                ->with('data', $bimbingan)
                ->with('mahasiswa', $mahasiswa)
                ->with('pembimbing1', $pembimbing1)
                ->with('pembimbing2', $pembimbing2)
                ->with('riwayat', $riwayat);
        }
        // return view('kordinator/lihatMahasiswa')
        //     ->with('data', $bimbingan)
        //     ->with('mahasiswa', $mahasiswa)
        //     ->with('pembimbing1', $pembimbing1)
        //     ->with('pembimbing2', $pembimbing2)
        //     ->with('riwayat', $riwayat);
    }
}
