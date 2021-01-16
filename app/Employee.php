<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //

    public function employees (){
        return $this->belongsTo(\App\Position::class);
    }

}
