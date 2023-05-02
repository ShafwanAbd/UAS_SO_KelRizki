<?php

namespace App\Http\Controllers;

use App\Models\AdminBank;
use App\Models\Deposit;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepositController extends Controller
{

    public function deposit_index()
    {
        $adminbank = AdminBank::first();
        $datas1 = Deposit::where('id_user', Auth::user()->id)->get();
        $setting = Setting::first();

        return view('main.deposit', compact('adminbank', 'datas1', 'setting'));
    }

    public function depositIn(Request $request) {
        $model1 = new Deposit;

        $model1->id_user = Auth::user()->id;
        $model1->amount = $request->amount; 
        $model1->detil_transaksi = $request->detil_transaksi; 
        $model1->bukti_pembayaran = '';
        $model1->status = 0; 

        $model1->save();

        if ($request->file('bukti_pembayaran')){
            $file = $request->file('bukti_pembayaran'); 
            $namaFile = "buktiPembayaran_".Auth::user()->id.$model1->created_at->format('YmdHis').".png";

            $model1->bukti_pembayaran = $namaFile;
            $file->move('image/buktiPembayaran/deposit', $namaFile);
        }

        $model1->save();

        return back()->with('success', 'Berhasil Melakukan Tiket Deposit!');
    }
}
