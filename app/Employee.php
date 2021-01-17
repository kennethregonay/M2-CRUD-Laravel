<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    public $timestamps = false;

    public function employees (){
        return $this->belongsTo(\App\Position::class);
    }
    
    protected $fillable = [
            'Firstname',
            'Lastname',
            'Middlename',
            'Address',
            'Gender',
            'Birthdate',
            'Position_Code',
    ];
}
