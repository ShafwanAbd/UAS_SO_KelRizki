<?php

namespace App\Http\Controllers;

use App\Models\AdminBank;
use App\Models\LogAudit;
use App\Models\Penarikan;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenarikanController extends Controller
{  
    public function penarikan_index()
    {
        $adminbank = AdminBank::first();
        $datas1 = Penarikan::where('id_user', Auth::user()->id)->get();
        $setting = Setting::first(); 

        return view('main.penarikan', compact('adminbank', 'datas1', 'setting'));
    }

    public function create(Request $request) {
        $model1 = new Penarikan(); 
        $model1->id_user = Auth::user()->id; 
        $model1->metode_penarikan = $request->metode_penarikan; 
        $model1->amount = $request->amount; 
        $model1->debit_from = $request->debit_from; 
        $model1->detil_transaksi = $request->detil_transaksi; 
        $model1->status = 0;    
        $model1->save();
        
        $model2 = new LogAudit();
        $model2->id_user = $model1->id_user;
        $model2->id_referensi = uniqid();
        $model2->catatan = 'Mengirim Tiket Penarikan ke Admin!'; 
        $model2->save();

        return back()->with('success', 'Berhasil Melakukan Penarikan');
    }
}
