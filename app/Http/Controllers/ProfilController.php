<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{ 
    public function profil_index()
    {
        return view('main.profil');
    }  
    
    public function profil_update(string $id, Request $request)
    {
        $model1 = User::find($id); 

        $model1->firstName = $request->firstName;
        $model1->lastName = $request->lastName;
        $model1->username = $request->username;
        $model1->noHP = $request->noHP;
        $model1->email = $request->email;
        $model1->alamat = $request->alamat;

        $model1->save();

        return back()->with('success', 'Berhasil Memperbaharui Profil');
    } 
    
    public function profil_delete(string $id)
    {
        $model1 = User::find($id);

        $model1->delete();

        return redirect('/')->with('success', 'Berhasil Menghapus Profil');
    } 
}
