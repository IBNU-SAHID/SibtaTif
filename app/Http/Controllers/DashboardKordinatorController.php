<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardKordinatorController extends Controller
{
    //
    public function index()
    {
        $jumlahMahasiswa = \App\Models\mahasiswa::count();
        $jumlahDosen = \App\Models\dosen::count();
        return view('/kordinator/dashboard')
            ->with('jumlahMahasiswa', $jumlahMahasiswa)
            ->with('jumlahDosen', $jumlahDosen);
    }
}
