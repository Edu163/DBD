<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaVuelo\Vuelo;

$factory->define(Vuelo::class, function (Faker $faker) {
    
    /* Llaves foráneas */
    $detalle_venta_vuelo_id = DB::table('detalles_ventas_vuelos')->select('id')->get();
    
    return [
        'detalle_venta_vuelo_id' => $detalle_venta_vuelo_id->random()->id,
        'precio' => $faker->numberBetween($min = 500, $max = 5000),
        'duracion_vuelo' => $faker->time,
    ];
});
