<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bloco extends Model
{
    public function salas(){
    	return $this->hasMany('App\Sala');
    }
    public function pavimentos(){
    	return $this->hasMany('App\Pavimento');
    }
}
