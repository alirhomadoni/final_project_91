<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    //
    protected $table ="pertanyaans";
    protected $guarded=[];

    public function komentars(){
        return $this->belongsToMany('App\Komentar');
    }
}
