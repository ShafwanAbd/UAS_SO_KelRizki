<?php

namespace App\Http\Controllers;

use App\Models\LogAudit;
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

            $model1 = new LogAudit();
            $model1->id_user = Auth::user()->id;
            $model1->id_referensi = uniqid();
            $model1->catatan = 'Changed Password'; 
            $model1->save();
            
            return back()->with('success', 'Berhasil Mengupdate Password');
        } else { 
            return back()->with('failed', 'Password Aktif Salah!');
        }
    }
}
