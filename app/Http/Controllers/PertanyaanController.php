<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PertanyaanController extends Controller
{
    
    public function pertanyaan_index()
    {
        $datas1 = Pertanyaan::all();

        return view('main.pertanyaan', compact('datas1'));
    } 

    public function create(Request $request){
        $model1 = new Pertanyaan;

        $model1->id_user = Auth::user()->id;
        $model1->subjek = $request->subjek;
        $model1->prioritas = $request->prioritas;
        $model1->deskripsi = $request->deskripsi;

        $model1->save();

        return back()->with('success', 'Berhasil Menambahkan Pertanyaan');
    }
}
