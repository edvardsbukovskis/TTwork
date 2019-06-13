<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class atbildes extends Model
{
    protected $table='atbildes';

    public function jautajumi(){
      return $this->belongsTo('App\jautajumi');
    }
    public function user(){
      return $this->belongsTo('App\user');
    }
}
