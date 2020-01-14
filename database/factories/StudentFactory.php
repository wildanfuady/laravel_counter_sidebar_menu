<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name, 
        'email' => $faker->unique()->safeEmail, 
        'gender' => 'Pria', 
    ];
});
