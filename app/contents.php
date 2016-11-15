<?php

namespace fucalibertad;

use Illuminate\Database\Eloquent\Model;

class contents extends Model
{
    public function details()
    {

         return $this->hasMany('fucalibertad\detailcontents');

    }

    public function categories(){

         return $this->belongsTo('fucalibertad\categories');

    }

    public function repertorys(){

         return $this->belongsTo('fucalibertad\repertorys');

    }

    public function employees()
    {

         return $this->hasMany('fucalibertad\employees');

    }

    public function states(){

         return $this->belongsTo('fucalibertad\states');

    }

}
