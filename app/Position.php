<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public $timestamps = false;
      public function Positions (){
        return $this->belongsTo(\App\Department::class);
    }

    public $fillable = [
       'Position_Name',
       'Department_Code',
    ];
    
}
