<?php
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Provider;
use Faker\Generator as Faker;

$factory->define(Provider::class, function (Faker $faker) {
    return [
        'id' => 1,
        'name' => $faker->company,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'image' => '', // Puedes ajustar esto según tus necesidades
    ];
});
