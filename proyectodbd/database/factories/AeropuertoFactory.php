<?php

use Faker\Generator as Faker;
use App\Aeropuerto;

$factory->define(Aeropuerto::class, function (Faker $faker) {
    return [
        'pais' => $faker->country,
    	'ciudad' => $faker->city,
    	'direccion' => $faker->address,
    	'nombre' =>  $faker->company,
    ];
});
