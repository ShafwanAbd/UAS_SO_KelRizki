<?php

namespace App\Http\Controllers;

use App\Models\AdminBank;
use App\Models\Penarikan;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenarikanController extends Controller
{  
    public function penarikan_index()
    {
        $adminbank = AdminBank::first();
        $datas1 = Penarikan::all();
        $setting = Setting::first();

        return view('main.penarikan', compact('adminbank', 'datas1', 'setting'));
    }

    public function depositIn(Request $request) {
        $model1 = new Penarikan();

        $model1->id_user = Auth::user()->id;
        $model1->amount = $request->amount;
        $model1->admin_fee = '1250';
        $model1->detil_transaksi = $request->detil_transaksi; 
        $model1->bukti_pembayaran = '';
        $model1->status = 0; 

        $model1->save();

        if ($request->file('bukti_pembayaran')){
            $file = $request->file('bukti_pembayaran'); 
            $namaFile = "buktiPembayaran_".Auth::user()->id.$model1->created_at->format('YmdHis').".png";

            $model1->bukti_pembayaran = $namaFile;
            $file->move('buktiPembayaran/penarikan', $namaFile);
        }

        $model1->save();

        return back()->with('success', 'Berhasil Melakukan Penarikan!');
    }
}
