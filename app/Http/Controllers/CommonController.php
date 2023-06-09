<?php

namespace App\Http\Controllers;

use App\Models\AdminBank;
use App\Models\BeliInvestasi;
use App\Models\Investasi;
use App\Models\LogAudit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommonController extends Controller
{

    public function home_index()
    {
        $datas['totalInvestasi'] = BeliInvestasi::all()->sum('amount');
        $datas['totalInvestor'] = BeliInvestasi::all()->count();
        $datas['totalPenerbit'] = Investasi::where('status', 1)->count();

        return view('home', compact([
            'datas'
        ]));
    }

    public function about_us_index()
    {
        return view('navbar.about_us');
    }

    public function FAQ_index()
    {
        return view('navbar.FAQ');
    }

    public function blog_index()
    {
        return view('navbar.blog');
    }

    public function dashboard_index()
    {
        return view('main.dashboard');
    }

    public function detail_peternakan_index(string $id)
    {
        $datas1 = Investasi::find($id);

        $isOwner = 0;
        if ($datas1->id_user == Auth::user()->id){
            $isOwner = 1;
        }

        $condition1 = Carbon::now()->between($datas1->start_date, $datas1->expiring_date) ? '1' : '0';
        $condition2 = $datas1->status == '1' ? '1' : '0';
 
        if ($condition1 && $condition2 == '1'){
            $isActive = 1;
        } else {
            $isActive = 0;
        }
  
        return view('main.detail-peternakan', compact(
            'datas1', 'isActive', 'isOwner'
        ));
    }

    public function ringkasan_index()
    {
        $datas2 = BeliInvestasi::where('id_user', Auth::user()->id)->pluck('id_investasi');
        $datas1 = Investasi::whereIn('id', $datas2)->get();

        return view('main.ringkasan', compact(
            'datas1'
        ));
    }

    public function aktivitas_index()
    {
        $datas1 = BeliInvestasi::where('id_user', Auth::user()->id)->get();

        return view('main.aktivitas', compact(
            'datas1'
        ));
    }

    public function pengaturan_index()
    {
        return view('main.pengaturan');
    }

    public function log_audit_index()
    {
        $datas1 = LogAudit::where('id_user', Auth::user()->id)->get();

        return view('main.log_audit', compact(
            'datas1'
        ));
    }

    public function verifikasi_identitas_index()
    {
        return view('main.verifikasi_identitas');
    }
}
