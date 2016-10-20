<?php

namespace App;
use App\states;
use App\repertorys;
use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    public function states(){

         return $this->belongsTo(states::class);

    }

    public function repertorys(){

         return $this->belongsTo(repertorys::class);

    }
}
