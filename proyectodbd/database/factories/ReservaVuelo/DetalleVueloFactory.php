<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaVuelo\DetalleVuelo;

$factory->define(DetalleVuelo::class, function (Faker $faker) {
    
    /* Llaves foráneas */
    $avion_id = DB::table('aviones')->select('id')->get();
	$vuelo_id = DB::table('vuelos')->select('id')->get();
    
    return [
        //
        'id_avion' => $avion_id->random()->id,
        'id_vuelo' => $vuelo_id->random()->id,
        'fecha_despegue' =>$faker->dateTime,
        'fecha_aterrizaje' =>$faker->dateTime,
    ];
});
