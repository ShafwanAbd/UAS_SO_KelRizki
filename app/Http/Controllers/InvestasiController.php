<?php

namespace App\Http\Controllers;

use App\Models\BeliInvestasi;
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
        $datas1 = Investasi::all();

        return view('main.investasi-diikuti', compact(
            'datas1'
        ));
    }

    // TRANSACTIONING ====================================================================================<>

    public function beli_investasi(Request $request, string $id){

        $model1 = new BeliInvestasi();
        $model1->id_user = Auth::user()->id;
        $model1->id_investasi = $id;
        $model1->lembar = $request->lembar;

        $model2 = Investasi::find($id);
        $model2->lembar_terjual += $request->lembar; 

        if ($model2->lembar_terjual > $model2->lembar){
            return back()->with('failed', 'Lembar Melebihi Batas Maksimal!');
        }   

        if (($model2->harga * $request->lembar) > ($request->pembayaran_from == 'balance' ? Auth::user()->balance : Auth::user()->dividen)){
            return back()->with('failed', 'Saldo Anda Kurang!');
        }

        $model3 = User::find(Auth::user()->id); 
        if ($request->pembayaran_dara == "saldo"){
            $model3->balance -= $request->lembar * $model2->harga;
        } else if ($request->pembayaran_dari == "dividen"){
            $model3->dividen -= $request->lembar * $model2->harga;
        } 
        $model3->balance_to_invest += $request->lembar * $model2->harga;
 
        $model1->amount = $request->lembar * $model2->harga;
  
        $audit = new LogAudit();
        $audit->id_user = Auth::user()->id;
        $audit->id_referensi = uniqid();
        $audit->catatan = 'Membeli '.$request->lembar.' Lembar pada '.$model2->nama.'!'; 

        $audit->save(); 
        $model1->save();
        $model2->save();
        $model3->save();

        return back()->with('success', 'Berhasil Membeli Investasi');
    }
}
