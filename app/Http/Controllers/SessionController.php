<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function keluar()
    {
        return view('keluar');
    }
}
