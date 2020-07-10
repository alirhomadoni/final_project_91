<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;
use App\Models\PertanyaanModel;
class JawabanController extends Controller
{
    //
    public function create($id){
        $pertanyaan=PertanyaanModel::find_by_id($id);
        //dd($pertanyaan);
        return view('final_project.form_jawab', compact('pertanyaan'));
   }
    public function store(Request $request){
        $data=$request->all();
        unset($data["_token"]);
        
        $jawaban=JawabanModel::save($data);
        //dd($data);
        return redirect('/temp');
        
    }

}
