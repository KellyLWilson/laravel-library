<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Authors;
use Faker\Generator as Faker;

$factory->define(Authors::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstname,
        'lastname' => $faker->lastname,
        'bio' => $faker->sentence($nbWords),
    
    ];
});
