<?php

namespace fucalibertad;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    public function permissions()
    {

         return $this->hasMany('fucalibertad\permissions');

    }
}
