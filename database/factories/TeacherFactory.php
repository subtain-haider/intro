<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Teacher;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Teacher::class, function (Faker $faker) {
    return [
        'name' =>  $faker->name,
        'address' =>  $faker->address,
        'gender' =>  $faker->title,
        'phone' =>  $faker->phoneNumber,
        'email' =>  $faker->safeEmail,
        'account_number' =>  $faker->bankAccountNumber,
        'dob' =>  $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
