<?php
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\users;
use Faker\Generator as Faker;

$factory->define(users::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'rol' => 'usuario', // Puedes ajustar esto según tus necesidades
        'password' => bcrypt('password123'), // Puedes utilizar una contraseña de ejemplo
    ];
});
