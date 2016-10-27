<?php

namespace fucalibertad;
use fucalibertad\employees;
use Illuminate\Database\Eloquent\Model;

class states extends Model
{
    
    public function employees(){

         return $this->hasMany(employees::class);

    }
}
