<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaVuelo\OrigenDestino;

$factory->define(OrigenDestino::class, function (Faker $faker) {
   
    /* Llaves foráneas */
    $id_detalle_vuelo = DB::table('detalles_vuelos')->select('id')->get();
    $id_aeropuerto = DB::table('aeropuertos')->select('id')->get();
    
    return [
        'id_detalle_vuelo' => $id_detalle_vuelo->random()->id,
        'id_aeropuerto' => $id_aeropuerto->random()->id,
    ];
});
