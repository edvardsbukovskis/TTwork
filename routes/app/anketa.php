<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anketa extends Model
{
    protected $table='anketas';

    public function user(){
      return $this->belngsTo('App\user');
    }
    public function jautajumi(){
      return $this->hasMany('App\jautajumi');
    }
}
