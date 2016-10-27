<?php

namespace fucalibertad;

use Illuminate\Database\Eloquent\Model;

class detailcontents extends Model
{
    public function contents(){

         return $this->belongsTo(contents::class);

    }

   

}
