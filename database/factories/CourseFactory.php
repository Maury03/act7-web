<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cursos;
use Faker\Generator as Faker;

$factory->define(Cursos::class, function (Faker $faker) {
    return [
        'courseName' => $faker->word(),
        'kitKey' => $faker->randomElement([1,2,3]),
    ];
});
