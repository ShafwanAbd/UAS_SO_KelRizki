<?php

namespace App\Http\Controllers;

use App\Models\BeliInvestasi;
use App\Models\Investasi;
use App\Models\User;
use Carbon\Carbon;
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
        $datas1 = Investasi::where('start_date', '>', Carbon::now())->get();  

        return view('main.investasi-segera', compact(
            'datas1'
        ));
    }

    public function investasi_selesai_index()
    {
        $datas1 = Investasi::where('expiring_date', '<', Carbon::now())->get();  

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

        $model2 = Investasi::find($id);
        $model2->lembar_terjual += $request->lembar; 
        if ($model2->lembar_terjual > $model2->lembar){
            return back()->with('failed', 'Lembar Melebihi Batas Maksimal!');
        }

        $model3 = User::find(Auth::user()->id);
        $model3->balance -= ($request->lembar * $model2->harga);

        $model1->save();
        $model2->save();
        $model3->save();

        return back()->with('success', 'Berhasil Membeli Investasi');
    }
}
