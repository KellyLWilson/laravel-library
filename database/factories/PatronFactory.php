<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Patrons;
use Faker\Generator as Faker;

$factory->define(Patrons::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstname,
        'lastname' => $faker->lastname,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
    ];
});
