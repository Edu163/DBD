<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaVuelo\OrigenDestino;

$factory->define(OrigenDestino::class, function (Faker $faker) {
   
    /* Llaves foráneas */
    $detalle_vuelo_id = DB::table('detalles_vuelos')->select('id')->get();
    $aeropuerto_id = DB::table('aeropuertos')->select('id')->get();
    
    return [
        'detalle_vuelo_id' => $detalle_vuelo_id->random()->id,
        'aeropuerto_id' => $aeropuerto_id->random()->id,
    ];
});
