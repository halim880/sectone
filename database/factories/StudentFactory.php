<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'image' => $faker->file(public_path('sectcone/image/students'), public_path('image/student'), false),
        'father_name'=> $faker->firstNameMale .' '. $faker->lastName,
        'mother_name'=> $faker->firstNameFemale. ' '. $faker->lastName,
        'phone'=> '01'.rand(6,9).rand(10000000, 99999999),
        'session'=> '2016-2017',
        'current_address'=> $faker->address,
        'permanent_address'=> $faker->address,
    ];
});
