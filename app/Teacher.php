<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
//    protected $table = 'my_teachers';
    protected $fillable = [
        'name', 'email', 'phone', 'gender', 'address', 'account_number', 'dob'
    ];
}
