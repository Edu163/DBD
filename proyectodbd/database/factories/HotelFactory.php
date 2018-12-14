<?php

use Faker\Generator as Faker;

$factory->define(App\Hotel::class, function (Faker $faker) {
    return [
    	'nombre' =>  $faker->company,
    	'pais' => $faker->country,
    	'direccion' => $faker->address,
		'estrellas' => $faker->numberBetween($min = 1, $max = 5),
		'valoracion'=> $faker->date,
		'capacidad'=> $faker->numberBetween($min = 1000, $max = 999999),
    ];
});