<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public $timestamps = false;

    public function departments (){
        return $this->belongsTo(\App\Position::class);
    }

    protected $fillable = [
        'Department_Name',
    ];
}
