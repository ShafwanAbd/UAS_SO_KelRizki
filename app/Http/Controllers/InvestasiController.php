<?php

namespace App\Http\Controllers;

use App\Models\BeliInvestasi;
use App\Models\IkutiInvestasi;
use App\Models\Investasi;
use App\Models\LogAudit;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvestasiController extends Controller
{ 
    public function investasi_detail_index(string $id)
    {   
        $datas1 = Investasi::where('id', $id)->first();

        return view('main.investasi-detail', compact(
            'id', 'datas1'
        ));
    }

    public function semua_bisnis_index()
    {    
        $datas1 = Investasi::where('start_date', '<=', Carbon::now())
                            ->where('expiring_date', '>=', Carbon::now())
                            ->get(); 

        return view('main.semua_bisnis', compact(
            'datas1'
        ));
    }

    public function investasi_segera_index()
    { 
        $datas1 = Investasi::whereBetween('start_date', [Carbon::now(), Carbon::now()->addMonths(12)])
                            ->whereNotBetween('start_date', [Carbon::now()->subMonths(12), Carbon::now()])
                            ->get();  

        return view('main.investasi-segera', compact(
            'datas1'
        ));
    }

    public function investasi_selesai_index()
    {
        $datas1 = Investasi::whereBetween('expiring_date', [Carbon::now()->subMonths(12), Carbon::now()])
                            ->get();
 

        return view('main.investasi-selesai', compact(
            'datas1'
        ));
    }

    public function investasi_diikuti_index()
    {
        $datas2 = BeliInvestasi::where('id_user', Auth::user()->id)->pluck('id_investasi');
        $datas1 = Investasi::whereIn('id', $datas2)->get();

        return view('main.investasi-diikuti', compact(
            'datas1'
        ));
    }

    // TRANSACTIONING ====================================================================================<>

    public function beli_investasi(Request $request, string $id){

        $model1 = new BeliInvestasi();
        $model2 = Investasi::find($id);
        $model3 = User::find(Auth::user()->id); 

        $model1->id_user = Auth::user()->id;
        $model1->id_investasi = $id;
        $model1->lembar = $request->lembar;
        $model1->pembayaran_from = $request->pembayaran_from;
        $model1->amount = $request->lembar * $model2->harga;
        $model1->status = 0;

        $model2->lembar_terjual += $request->lembar;  
        if ($model2->lembar_terjual > $model2->lembar){
            return back()->with('failed', 'Lembar Melebihi Batas Maksimal!');
        }    
        if (($model2->harga * $request->lembar) > ($request->pembayaran_from == 'balance' ? Auth::user()->balance : Auth::user()->dividen)){
            return back()->with('failed', 'Saldo Anda Kurang!');
        }
 
        // Pengurangan Saldo / Dividen User
        if ($request->pembayaran_from == "saldo"){
            $model3->balance -= $request->lembar * $model2->harga;
        } else if ($request->pembayaran_from == "dividen"){
            $model3->dividen -= $request->lembar * $model2->harga;
        } 
        // Penambahan balance_to_invest dari pembelian
        $model3->balance_to_invest += $request->lembar * $model2->harga; 
  
        $audit = new LogAudit();
        $audit->id_user = Auth::user()->id;
        $audit->id_referensi = uniqid();
        $audit->catatan = 'Memesan '.$request->lembar.' Lembar pada '.$model2->nama.'!'; 

        $audit->save(); 
        $model1->save();
        $model2->save();
        $model3->save();

        return back()->with('success', 'Berhasil Memesan Investasi');
    } 
}
