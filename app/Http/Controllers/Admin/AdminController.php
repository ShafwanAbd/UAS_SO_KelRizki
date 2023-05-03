<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminBank;
use App\Models\Deposit;
use App\Models\LogAudit;
use App\Models\Penarikan;
use App\Models\Pendanaan;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // =========== VIEW ================ //
     
    public function ringkasan_index(){
        // CHART 1
        $datas['total_active'] = User::whereStatus(1)->get()->count() + Deposit::whereStatus(1)->get()->count() + Penarikan::whereStatus(1)->get()->count();
        $datas['total_unactive'] = User::whereStatus(0)->get()->count() + Deposit::whereStatus(0)->get()->count() + Penarikan::whereStatus(0)->get()->count();

        $datas['total_transaksi'] = Deposit::whereStatus(1)->get()->count() + Penarikan::whereStatus(1)->get()->count();
        $datas['total_bisnis'] = User::whereStatus(1)->get()->count();
        $datas['active_users'] = User::whereStatus(1)->get()->count();
        $datas['total_pendanaan'] = User::whereStatus(1)->get()->count();

        return view('admin.ringkasan', compact(
            'datas'
        ));
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
  
    public function penarikanTransaksi_index(){ 
        $datas1 = Penarikan::all();
        $setting = Setting::first();

        return view('admin.penarikan_transaksi', compact(
            'datas1', 'setting'
        ));
    }
  
    public function penarikanPengaturan_index(){ 

        return view('admin.penarikan_pengaturan', compact(
            ''
        ));
    }
 
    public function investasi_index(){

        return view('admin.investasi');
    }
 
    public function blog_index(){

        return view('admin.blog');
    }

    // =========== ACCEPTING =========== //
    public function updateBankAdmin(Request $request){
        $model1 = AdminBank::first();

        $model1->name = $request->name;
        $model1->bankName = $request->bankName;
        $model1->address = $request->address;
        $model1->swift = $request->swift;
        $model1->iban = $request->iban;
        $model1->acct_no = $request->acct_no; 
        if (isset($request->status)){
            $model1->status = $request->status; 
        } else {
            $model1->status = 0; 
        }

        $model1->save();

        return back()->with('Berhasil Memperbaharui Bank Admin!');
    }

    public function akunAccept(string $id){
        $model1 = User::find($id);
        $model1->status = '1';  
        $model1->save();
        
        $model2 = new LogAudit();
        $model2->id_user = $model1->id;
        $model2->id_referensi = uniqid();
        $model2->catatan = 'Akun Diaktifkan oleh Admin'; 
        $model2->save();

        return back()->with('success', 'Berhasil Mengaktifkan Akun '.$model1->username.'!');
    }

    public function akunNoAccept(string $id){
        $model1 = User::find($id);
        $model1->status = '0';  
        $model1->save();
        
        $model2 = new LogAudit();
        $model2->id_user = $model1->id;
        $model2->id_referensi = uniqid();
        $model2->catatan = 'Akun Dinonaktifkan oleh Admin'; 
        $model2->save();

        return back()->with('success', 'Berhasil Menonaktifkan Akun '.$model1->username.'!');
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
        
        $model2 = new LogAudit();
        $model2->id_user = $model1->id_user;
        $model2->id_referensi = uniqid();
        $model2->catatan = 'Deposit Disetujui oleh Admin'; 
        $model2->save();

        $user = User::find($model1->id_user); 
        $user->balance += $model1->amount; 
        $user->save();

        $name = User::where('id', $model1->id_user)->value('firstName') . ' ' . User::where('id', $model1->id_user)->value('lastName');

        return back()->with('success', 'Berhasil Menerima Deposit dari '.$name.'!');
    }

    public function penarikanAccept(string $id){
        $model1 = Penarikan::find($id);
        $model1->status = '1';  
        $model1->save();
        
        $model2 = new LogAudit();
        $model2->id_user = $model1->id_user;
        $model2->id_referensi = uniqid();
        $model2->catatan = 'Penarikan Disetujui oleh Admin'; 
        $model2->save();

        $user = User::find($model1->id_user);
        if ($model1->debit_from == 'Balance'){ 
            $user->balance -= $model1->amount;
        } else if ($model1->debit_from == 'Dividen'){ 
            $user->dividen -= $model1->amount;
        } else if ($model1->debit_from == 'Bonus Afiliasi'){ 
            $user->dividen -= $model1->amount;
        }
        $user->save();

        $name = User::where('id', $model1->id_user)->value('firstName') . ' ' . User::where('id', $model1->id_user)->value('lastName');

        return back()->with('success', 'Berhasil Menerima Penarikan dari '.$name.'!');
    }
}
