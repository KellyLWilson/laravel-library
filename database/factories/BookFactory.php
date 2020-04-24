<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Books;
use Faker\Generator as Faker;

$factory->define(Books::class, function (Faker $faker) {
    return [
        'title' => $faker->realText($maxNbChars = 25),
        'excerpt' => $faker->realText($maxNbChars = 45),
        'status' => $faker->realText($maxNbChars = 10),
        //
    ];
});
