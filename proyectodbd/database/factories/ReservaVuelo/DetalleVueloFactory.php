<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaVuelo\DetalleVuelo;

$factory->define(DetalleVuelo::class, function (Faker $faker) {
    
    /* Llaves foráneas */
    $id_avion = DB::table('aviones')->select('id')->get();
    $id_vuelo = DB::table('vuelos')->select('id')->get();
    $id_user = DB::table('users')->select('id')->get();
    
    return [
        'id_avion' => $id_avion->random()->id,
        'id_vuelo' => $id_vuelo->random()->id,
        'id_user' => $id_user->random()->id,
        'fecha_despegue' =>$faker->dateTime,
        'fecha_aterrizaje' =>$faker->dateTime,
    ];
});
