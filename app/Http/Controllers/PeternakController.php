<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeternakController extends Controller
{
    public function dashboard()
    {
        return view('peternak.dashboard');
    }

    public function pengajuan()
    {
        return view('peternak.pengajuan');
    }
}
