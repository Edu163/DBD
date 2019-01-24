<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaVuelo\DetalleVuelo;

$factory->define(DetalleVuelo::class, function (Faker $faker) {
    
    /* Llaves foráneas */
    $avion_id = DB::table('aviones')->select('id')->get();
	$vuelo_id = DB::table('vuelos')->select('id')->get();
    $origen = DB::table('aeropuertos')->select('id')->get();
    $destino = DB::table('aeropuertos')->select('id')->get();
    $aeropuerto = DB::table('aeropuertos')->select('id')->get();
    return [
        //
        'avion_id' => $avion_id->random()->id,
        'id_vuelo' => $vuelo_id->random()->id,
        'aeropuerto_id' => $aeropuerto->random()->id,
        'id_origen' => $origen->random()->id,
        'id_destino' => $destino->random()->id,
        'fecha_despegue' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+ 2 days', $timezone = null),
        'fecha_aterrizaje' =>$faker->dateTimeBetween($startDate = '+ 2 days', $endDate = '+ 3 days', $timezone = null),
        'precio' => $faker->numberBetween($min = 500, $max = 5000)
    ];
});
