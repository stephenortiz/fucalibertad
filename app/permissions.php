<?php

namespace fucalibertad;

use Illuminate\Database\Eloquent\Model;

class permissions extends Model
{
    
    public function roles(){

         return $this->belongsTo('fucalibertad\roles');

    }

}
