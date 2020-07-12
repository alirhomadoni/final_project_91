<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class PertanyaanController extends Controller
{
    public function index(){
        $pertanyaans=PertanyaanModel::get_all();
        $jawabans=JawabanModel::get_all();
        //dd($jawabans,$pertanyaans);
        return view('final_project.list',compact('pertanyaans','jawabans'));
    }

    public function create(){
         return view('final_project.form');
    }
    public function store(Request $request){
        $data=$request->all();
        unset($data["_token"]);
        
        $pertanyaans=PertanyaanModel::save($data);
        if ($pertanyaans){
             return redirect('/pertanyaan');
        }
       
    }
    public function show($id){
        $pertanyaans=PertanyaanModel::get_all();
        $jawabans=JawabanModel::get_all();
        //dd ($pertanyaans,$jawabans);
        foreach ($pertanyaans as $key => $value) {
            if($value->id==$id){
                $pertanyaan=$value;
            }    
        }
        //dd ($pertanyaans,$jawabans);
        return  view('final_project.show',compact('pertanyaan','jawabans'));
    }

    public function edit($id){
        $pertanyaan=PertanyaanModel::find_by_id($id);
        //dd($pertanyaan);
        return view('final_project.edit',compact('pertanyaan'));
    }
    public function update($id, Request $request){
        $pertanyaan=PertanyaanModel::update($id,$request->all());
        return redirect('/pertanyaan');
    }
    public function destroy($id){
        $delete=PertanyaanModel::destroy($id);
        return redirect('/pertanyaan');
    }
}