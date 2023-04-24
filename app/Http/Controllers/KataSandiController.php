<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class KataSandiController extends Controller
{ 
    public function kata_sandi_index()
    {
        return view('main.kata_sandi');
    }

    public function kata_sandi_update(Request $request)
    { 

        if (Hash::check($request->current_pw, Auth::user()->password)) {
            DB::table('users')->where('id', Auth::user()->id)
                            ->update(['password' => bcrypt($request->new_pw)]);
            return back()->with('success', 'Berhasil Mengupdate Password');
        } else { 
            return back()->with('failed', 'Password Tidak Ada Dalam Database!');
        }
    }
}
