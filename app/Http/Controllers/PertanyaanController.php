<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use App\Models\Reply;
use App\Models\User;
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
        $model1->owner = User::where('id', Auth::user()->id)->value('username');
        $model1->subjek = $request->subjek;
        $model1->prioritas = $request->prioritas;
        $model1->deskripsi = $request->deskripsi;

        $model1->save();

        return back()->with('success', 'Berhasil Menambahkan Pertanyaan');
    }

    public function createReply(string $id ,Request $request){
        $model1 = new Reply();
 
        $model1->id_pertanyaan = $id; 
        $model1->owner = User::where('id', Auth::user()->id)->value('username');
        $model1->replyTo = $request->replyTo;
        $model1->deskripsi = $request->deskripsi;

        $model1->save();

        return back()->with('success', 'Berhasil Menambahkan Jawaban');
    }

    public function detail(string $id){
        $model1 = Pertanyaan::find($id);  
        $model2 = Reply::where('id_pertanyaan', $id)->get();   

        return view('main.pertanyaan_detail', compact('model1', 'model2'));
    }

    public function delete(string $id){
        $model1 = Pertanyaan::find($id);  

        $model1->delete();

        return back()->with('success', 'Berhasil Menghapus Pertanyaan!');
    }
}
