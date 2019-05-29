<?php

use Faker\Generator as Faker;

$factory->define(\App\Alumno::class, function (Faker $faker) {
    return [
        'nombres' => $faker->name,
        'apellidos' => $faker->lastName,
        'edad' => $faker->numberBetween(18,35),
        'direccion' => $faker->address,
        'ciudad' => $faker->city,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
