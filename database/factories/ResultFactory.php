<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Result;
use Faker\Generator as Faker;

$factory->define(Result::class, function (Faker $faker) {
    return [
        'student_id'=> 2016331509,
        'department_id'=> 101,
        'semester_id'=> 106,
        'point'=> 3.34,
        'grade'=> 'A-',
        'status'=> 'passed'
    ];
});
