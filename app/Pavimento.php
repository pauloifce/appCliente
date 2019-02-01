<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pavimento extends Model{
    public function bloco(){
    	return $this->belongsTo('App\Bloco');
    } 
}
