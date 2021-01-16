<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    //
      public function Positions (){
        return $this->belongsTo(\App\Department::class);
    }
}
