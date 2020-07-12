<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

Class KomentarModel{
    public static function get_all(){
        $komentars=DB::table('komentars')
                    ->select('komentars.*', 'users.name as user_name', 'users.id as user_id')
                    ->join('users','komentars.user_id','=','users.id')
                    ->get();

        return $komentars;
    }
    public static function save($data){
        $now= date_create()->format('Y-m-d H:i:s');
        if(!(isset($data['tanggal_dibuat']))){
            $data['created_at']=$now;
        }else{
            $data['updated_at']=$now;
        }
        $new_komentar=DB::table('komentars')->insert($data);
        return $new_komentar;
    }
    public static function find_by_idpertanyaan($user_id,$pertanyaan_id){
        $komentars=DB::table('komentars')
        ->select('komentars.*', 'users.name as user_name', 'users.id as user_id')
        ->where([['user_id','=',$user_id],['pertanyaan_id','=', $pertanyaan_id]])
        ->join('users','komentars.user_id','=','users.id')
        ->get();
        return $komentars;
    }
    public static function find_by_idjawaban($user_id,$jawaban_id){
        $komentars=DB::table('komentars')
                    ->select('komentars.*', 'users.name as user_name', 'users.id as user_id')
                    ->where([['user_id','=',$user_id],['jawaban_id','=', $jawaban_id]])
                    ->join('users','komentars.user_id','=','users.id')
                    ->get();
        return $komentars;
    }
    // public static function update($id, $request){
    //     //dd($request);
    //     $now= date_create()->format('Y-m-d H:i:s');
    //     $pertanyaan=DB::table('pertanyaans')
    //                 ->where('id',$id)
    //                 ->update([
    //                     'judul'=> $request['judul'],
    //                     'tag' => $request['tag'],
    //                     'isi' => $request['isi'],
    //                     'tanggal_diperbaharui'=>$now
    //                 ]);
    // }
    // public static function destroy($id){
    //     $deletedpertanyaan= DB::table('pertanyaans')
    //                     ->where('id',$id)
    //                     ->delete();
    //     return $deletedpertanyaan;

    // }

}