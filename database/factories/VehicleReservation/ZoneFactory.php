<?php

use Faker\Generator as Faker;
use App\Modules\VehicleReservation\Zone;

$factory->define(Zone::class, function (Faker $faker) {
    return [
        'nombre' => $faker->state,
        'direccion' => $faker->address,
    ];
});
