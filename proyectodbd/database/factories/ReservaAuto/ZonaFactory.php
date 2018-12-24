<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaAuto\Zona;

$factory->define(Zona::class, function (Faker $faker) {
    
    return [
        'nombre' => $faker->state,
        'direccion' => $faker->address,
    ];
});
