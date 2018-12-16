<?php

use Faker\Generator as Faker;


/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    
    return [
        'nombre' => $faker->firstName,
        'apellido' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'acceso' => $faker->randomElement(['Usuario','Colaborador']),
        'n_documento' => $faker->word,
        'tipo_documento' => $faker->word,
        'pais' => $faker->country,
        'puntos' => rand(0,9999),
        'millas' => rand(0,9999),
        'millas_elite' => rand(0,9999),
        'telefono' => $faker->phoneNumber,
        'categoria' => $faker->randomElement(['Normal','Platinum','Premium']),
        'fecha_nac' => $faker->date,
    ];
});
