<?php

namespace App\Http\Controllers;

use App\Models\BeliInvestasi;
use App\Models\Investasi;
use App\Models\LogAudit;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeternakController extends Controller
{
    public function dashboard()
    {
        $datas['jmlpeternakan'] = Investasi::where('id_user', Auth::user()->id)->count();  
        $datas1 = Investasi::where('id_user', Auth::user()->id)->get();

        $model1 = Investasi::where('id_user', Auth::user()->id)->get();
        $datas['saldoSaham'] = 0;
        foreach ($model1 as $key=>$val){
            $datas['saldoSaham'] += $val->lembar_terjual * $val->harga;
        }

        return view('peternak.dashboard', compact(
            'datas', 'datas1'
        ));
    }

    public function pengajuan()
    { 
        return view('peternak.pengajuan');
    }

    public function add_bisnis(Request $request){ 

        $model1 = new Investasi();
        $model1->id_user = Auth::user()->id;
        $model1->nama = $request->nama;
        $model1->durasi = $request->durasi;
        $model1->period = $request->period;
        $model1->kategori = $request->kategori;
        $model1->jenis = $request->jenis;
        $model1->interest = $request->interest;
        $model1->harga = $request->harga; 
        $model1->lembar = $request->lembar;
        $model1->lembar_terjual = 0;
        $model1->start_date = Carbon::parse($request->start_date)->format('Y-m-d');
        $model1->expiring_date = Carbon::parse($request->start_date)->addDays($request->durasi)->format('Y-m-d');
        $model1->location = $request->location;
        $model1->asuransi = $request->asuransi;
        $model1->referral_percent = $request->referral_percent; 
 
        preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $request->url_yt, $matches);
        $video_id = $matches[1]; 
         
        $model1->url_yt = $video_id;
        $model1->keterangan = $request->keterangan ;
        $model1->status = 0;
        $model1->save();
        
        return redirect('/dashboardPeternak')->with('success', 'Berhasil Membuat Peternakan!');
    } 
}
