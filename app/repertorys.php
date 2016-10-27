<?php

namespace fucalibertad;
use fucalibertad\employees;
use Illuminate\Database\Eloquent\Model;

class repertorys extends Model
{


    public function employees(){

         return $this->hasMany(employees::class);

    }

}
