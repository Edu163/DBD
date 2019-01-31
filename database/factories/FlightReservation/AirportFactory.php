<?php

use Faker\Generator as Faker;
use App\Modules\FlightReservation\Airport;

$factory->define(Airport::class, function (Faker $faker) {
    return [
        'pais' => $faker->country,
    	'ciudad' => $faker->city,
    	'direccion' => $faker->address,
    	'nombre' =>  $faker->company,
    ];
});
