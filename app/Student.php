<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
//    protected $fillable = [
//        'name', 'email', 'password', 'father_name'
//    ];

    protected $guarded = [];

    public function classroom(){
        return $this->belongsTo(classroom::class);
    }
}
