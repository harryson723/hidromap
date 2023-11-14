<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use App\Models\Point;

$factory->define(Point::class, function (Faker\Generator $faker) {
    return [
        'latitude' => $faker->latitude,
        'longitud' => $faker->longitude,
        'description' => $faker->sentence,
        'name' => $faker->word,
        'FK_id_provider' => 1, // Reemplaza con un valor válido
    ];
});
