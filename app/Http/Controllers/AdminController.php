<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\Penarikan;
use App\Models\Pendanaan;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{  
    // =========== ACCEPTING =========== //
    public function investorAccept(string $id){
        $model1 = User::find($id);
        $model1->status = '1';
        $model1->role = '2';

        return back()->with('success', 'Berhasil Menerima Akun Investor!');
    }

    public function peternakAccept(string $id){
        $model1 = User::find($id);
        $model1->status = '1';
        $model1->role = '3';

        return back()->with('success', 'Berhasil Menerima Akun Peternak!');
    }

    public function pendanaanAccept(string $id){
        $model1 = Pendanaan::find($id);
        $model1->status = '1'; 

        return back()->with('success', 'Berhasil Menerima Pengajuan Pendanaan Peternak!');
    }

    public function depositAccept(string $id){
        $model1 = Deposit::find($id);
        $model1->status = '1'; 

        return back()->with('success', 'Berhasil Menerima Deposit Investor!');
    }

    public function penarikanAccept(string $id){
        $model1 = Penarikan::find($id);
        $model1->status = '1'; 

        return back()->with('success', 'Berhasil Menerima Penarikan Investor!');
    }
}
