<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contents extends Model
{
    public function details()
    {

         return $this->hasMany('App\detailcontents');

    }

    public function categories(){

         return $this->belongsTo('App\categories');

    }

    public function repertorys(){

         return $this->belongsTo('App\repertorys');

    }

    public function employees()
    {

         return $this->hasMany('App\employees');

    }

}
