<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminBank;
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
        $datas1 = User::all();

        return view('admin.pengguna', compact(
            'datas1'
        ));
    }
 
    public function broadcastEmail_index(){

        return view('admin.broadcastEmail');
    }
 
    public function pesan_index(){

        return view('admin.pesan');
    }
 
    public function depositTransaksi_index(){
        $datas1 = Deposit::all();

        return view('admin.deposit_transaksi', compact(
            'datas1'
        ));
    }
 
    public function depositPengaturan_index(){
        $adminbank = AdminBank::first();

        return view('admin.deposit_pengaturan', compact(
            'adminbank'
        ));
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
    public function akunAccept(string $id){
        $model1 = User::find($id);
        $model1->status = '1';
        $model1->role = '3';

        $model1->save();

        return back()->with('success', 'Berhasil Menerima Akun '.$model1->username.'!');
    }

    public function investorAccept(string $id){
        $model1 = User::find($id);
        $model1->status = '1';
        $model1->role = '2';

        $model1->save();

        return back()->with('success', 'Berhasil Menerima Akun Investor!');
    }

    public function peternakAccept(string $id){
        $model1 = User::find($id);
        $model1->status = '1';
        $model1->role = '3';

        $model1->save();

        return back()->with('success', 'Berhasil Menerima Akun Peternak!');
    }

    public function pendanaanAccept(string $id){
        $model1 = Pendanaan::find($id);
        $model1->status = '1'; 

        $model1->save();

        return back()->with('success', 'Berhasil Menerima Pengajuan Pendanaan Peternak!');
    }

    public function depositAccept(string $id){
        $model1 = Deposit::find($id);
        $model1->status = '1'; 

        $model1->save();

        $name = User::where('id', $model1->id_user)->value('firstName') . ' ' . User::where('id', $model1->id_user)->value('lastName');

        return back()->with('success', 'Berhasil Menerima Deposit dari '.$name.'!');
    }

    public function penarikanAccept(string $id){
        $model1 = Penarikan::find($id);
        $model1->status = '1'; 

        $model1->save();

        return back()->with('success', 'Berhasil Menerima Penarikan Investor!');
    }
}
