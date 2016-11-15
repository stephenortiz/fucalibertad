<?php

namespace fucalibertad;
use fucalibertad\employees;
use fucalibertad\contents;
use fucalibertad\detailcontents;
use Illuminate\Database\Eloquent\Model;

class states extends Model
{
    
    public function employees(){

         return $this->hasMany(employees::class);

    }

    public function contents(){

         return $this->hasMany(contents::class);

    }

    public function detailcontents(){

         return $this->hasMany(detailcontents::class);

    }
}
