<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaVuelo\Vuelo;

$factory->define(Vuelo::class, function (Faker $faker) {
    
    /* Llaves foráneas */    
    return [
        'precio' => $faker->numberBetween($min = 500, $max = 5000),
        'duracion_vuelo' => $faker->time,
    ];
});
