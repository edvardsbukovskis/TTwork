<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jautajumi extends Model
{
    protected $table='jautajumi';

    public function anketa(){
      return $this->belongsTo('App\anketa');
    }
    public function atbildes(){
      return $this->hasMany('App\atbildes');
    }
}
