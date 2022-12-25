<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $dosen = \App\Models\dosen::all();
        return view('/kordinator/dosen')->with('data', $dosen);
    }

    

}
