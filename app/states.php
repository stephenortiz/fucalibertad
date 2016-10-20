<?php

namespace App;
use App\employees;
use Illuminate\Database\Eloquent\Model;

class states extends Model
{
    
    public function employees(){

         return $this->hasMany(employees::class);

    }
}
