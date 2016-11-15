<?php

namespace fucalibertad;

use Illuminate\Database\Eloquent\Model;

class detailcontents extends Model
{
    public function contents(){

         return $this->belongsTo(contents::class);

    }

    public function states(){

         return $this->belongsTo(states::class);

    }

   

}
