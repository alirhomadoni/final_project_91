<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

Class JawabanModel{
    public static function get_all(){
        $jawaban=DB::table('jawabans')
                    ->select('jawabans.*', 'users.name as user_name', 'users.id as user_id')
                    ->join('users','jawabans.user_id','=','users.id')
                    ->get();
        return $jawaban;
    }
    public static function save($data){
        $now= date_create()->format('Y-m-d H:i:s');
        if(!(isset($data['tanggal_dibuat']))){
            $data['tanggal_dibuat']=$now;
        }else{
            $data['tanggal_diperbaharui']=$now;
        }
        $new_jawaban=DB::table('jawabans')->insert($data);
        return $new_jawaban;
    }
    public static function find_by_id($id){
        $jawabans=DB::table('jawabans')
                    ->select('jawabans.*', 'users.name as user_name', 'users.id as user_id')
                    ->where('jawabans.id','=', $id)
                    ->join('users','jawabans.user_id','=','users.id')
                    ->get();
        return $jawabans;
        
    }
}