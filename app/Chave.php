<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chave extends Model
{
	public function sala(){
    	return $this->belongsTo('App\Sala');
    }    
}
