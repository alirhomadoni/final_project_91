<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

Class PertanyaanModel{
    public static function get_all(){
        $pertanyaan=DB::table('pertanyaans')
                ->select('pertanyaans.*', 'users.name as user_name', 'users.id as user_id')
                ->join('users','pertanyaans.user_id','=','users.id')
                ->get();

        return $pertanyaan;
    }
    public static function save($data){
        $now= date_create()->format('Y-m-d H:i:s');
        if(!(isset($data['tanggal_dibuat']))){
            $data['tanggal_dibuat']=$now;
        }else{
            $data['tanggal_diperbaharui']=$now;
        }

        $new_pertanyaan=DB::table('pertanyaans')->insert($data);
        return $new_pertanyaan;
    }
    public static function find_by_id($id){
        $pertanyaan=DB::table('pertanyaans')->where('id', $id)->first();
        return $pertanyaan;
    }
    public static function update($id, $request){
        //dd($request);
        $now= date_create()->format('Y-m-d H:i:s');
        $pertanyaan=DB::table('pertanyaans')
                    ->where('id',$id)
                    ->update([
                        'judul'=> $request['judul'],
                        'isi' => $request['isi'],
                        'tanggal_diperbaharui'=>$now
                    ]);
    }
    public static function destroy($id){
        $deletedpertanyaan= DB::table('pertanyaans')
                        ->where('id',$id)
                        ->delete();
        return $deletedpertanyaan;

    }

}