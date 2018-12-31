<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaVehiculo\Zona;

$factory->define(Zona::class, function (Faker $faker) {
    
    return [
        'nombre' => $faker->state,
        'direccion' => $faker->address,
    ];
});
