<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class companys extends Model
{
    public function details(){

         return $this->hasMany(detailcontents::class);

    }
}
