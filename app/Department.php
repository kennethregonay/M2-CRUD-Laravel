<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    public function departments (){
        return $this->belongsTo(\App\Position::class);
    }
}
