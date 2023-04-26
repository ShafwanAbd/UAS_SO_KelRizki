<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Penarikan;
use App\Models\Pendanaan;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // =========== VIEW ================ //
     
    public function ringkasan_index(){

        return view('admin.ringkasan');
    }
 
    public function pengguna_index(){

        return view('admin.pengguna');
    }
 
    public function broadcastEmail_index(){

        return view('admin.broadcastEmail');
    }
 
    public function pesan_index(){

        return view('admin.pesan');
    }
 
    public function deposit_index(){

        return view('admin.deposit');
    }
 
    public function penarikan_index(){

        return view('admin.penarikan');
    }
 
    public function investasi_index(){

        return view('admin.investasi');
    }
 
    public function blog_index(){

        return view('admin.blog');
    }

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
