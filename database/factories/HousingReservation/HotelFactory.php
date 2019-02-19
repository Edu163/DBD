<?php

use Faker\Generator as Faker;
use App\Modules\HousingReservation\Hotel;

$factory->define(Hotel::class, function (Faker $faker) {
    return [
    	'nombre' =>  $faker->company,
    	'pais' => $faker->country,
    	'direccion' => $faker->address,
			'estrellas' => $faker->numberBetween($min = 1, $max = 5),
			'valoracion'=> $faker->numberBetween($min = 0, $max = 10),
			'capacidad'=> $faker->numberBetween($min = 0, $max = 9999),
    ];
});
