<?php

use Faker\Generator as Faker;
use App\Modules\VehicleReservation\Zone;

$factory->define(Zone::class, function (Faker $faker) {
    //Llaves foráneas
    $direccion = DB::table('cities')->select('id')->get();

    return [
        'nombre' => $faker->state,
        'direccion' => $direccion->random()->id,
    ];
});
