<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use illuminate\pagination;

class DosenController extends Controller
{
    //
    public function index()
    {
        $auth_id = Auth::user()->username;
        $data = \App\Models\dosen::where('nip', $auth_id)->first();
        return view('/dosen/bimbingan')->with('data', $data);
    }

    public function listDosen()
    {
        $dosen = \App\Models\dosen::paginate(10);
        return view('/kordinator/dosen')->with('data', $dosen);
    }

    public function lihatDosen($nip)
    {
        $dosen = \App\Models\dosen::where('nip', $nip)->first();
        $mahasiswaBimbingan = \App\Models\bimbingan::where(
            'pembimbing_id',
            $nip
        )->get();
        return view('/kordinator/lihatDosen')
            ->with('dosen', $dosen)
            ->with('data', $mahasiswaBimbingan);
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $dosen = \App\Models\dosen::where(
            'nama',
            'like',
            '%' . $search . '%'
        )->paginate(10);
        return view('/kordinator/dosen')->with('data', $dosen);
    }
}
