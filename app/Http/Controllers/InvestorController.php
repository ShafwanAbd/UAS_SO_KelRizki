<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use App\Models\Pendanaan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvestorController extends Controller
{ 
    // USER =============================== <>
    public function investorIn(Request $request){
        $model1 = new Investor;

        $model1->id_user = Auth::user()->id;
        $model1->invest_in_money = $request->invest_in_money; 
        $model1->status = 0;

        return back()->with('success', 'Berhasil Berinvestasi!');
    }
}
