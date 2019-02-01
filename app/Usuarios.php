<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    public function telefones(){
    	return $this->hasMany('App\Telefone');
    }
   
}
