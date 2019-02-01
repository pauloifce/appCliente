<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    public function chaves(){
    	return $this->hasMany('App\Chave');
    }

    public function bloco(){
    	return $this->belongsTo('App\Bloco');
    }   
}
