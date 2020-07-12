<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PertanyaanModel;
use App\Models\JawabanModel;
use App\Models\KomentarModel;

class KomentarController extends Controller
{
    //
    public function store(Request $request){
        $data=$request->all();
        unset($data["_token"]);
        $komentars=KomentarModel::save($data);
        return redirect("/pertanyaan");
    
    }
    public function show_pertanyaan_komentar($user_id,$pertanyaan_id){
        $pertanyaan=PertanyaanModel::find_by_id($pertanyaan_id);
        $komentars=KomentarModel::find_by_idpertanyaan($user_id,$pertanyaan_id);
        //dd($pertanyaan,$komentars);
        return view('final_project.komentarpertanyaan', compact('pertanyaan','komentars'));
        
    }
    public function show_jawaban_komentar($user_id,$jawaban_id){
        $jawaban=JawabanModel::find_by_id($jawaban_id);
        $komentars=KomentarModel::find_by_idjawaban($user_id,$jawaban_id);
        //dd($jawaban,$komentars);

        return view('final_project.komentarjawaban', compact('jawaban','komentars'));
}
}
