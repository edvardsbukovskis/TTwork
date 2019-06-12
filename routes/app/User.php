<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table='users';

    public function anketa(){
      return $this->hasMany(App\anketa);
    }
    public function atbildes(){
      return $this->hasMany('App\atbildes');
    }
}
