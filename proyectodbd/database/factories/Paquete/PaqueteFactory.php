<?php

use Faker\Generator as Faker;
use App\Modulos\PaqueteVuelo\Paquete;

$factory->define(Paquete::class, function (Faker $faker) {
    $vuelo_id = DB::table('vuelos')->select('id')->get();
    $hotel_id = DB::table('hoteles')->select('id')->get();
    $vehiculo_id = DB::table('vehiculos')->select('id')->get();
    return [
        'vuelo_id' => $vuelo_id->random()->id,
        'hotel_id' => $hotel_id->random()->id,
        'vehiculo_id' => $vehiculo_id->random()->id,
        'fecha_inicio' => $faker->dateTimeBetween($startDate = '+2 weeks', $endDate = '+4 weeks', $timezone = null),
        'fecha_fin' => $faker->dateTimeBetween($startDate = '+2 weeks', $endDate = '+4 weeks', $timezone = null),
    ];
});
