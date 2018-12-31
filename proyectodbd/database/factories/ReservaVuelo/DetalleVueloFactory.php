<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaVuelo\DetalleVuelo;

$factory->define(DetalleVuelo::class, function (Faker $faker) {
    
    /* Llaves foráneas */
    $avion_id = DB::table('aviones')->select('id')->get();
    $vuelo_id = DB::table('vuelos')->select('id')->get();
    $user_id = DB::table('users')->select('id')->get();
    
    return [
        'avion_id' => $avion_id->random()->id,
        'vuelo_id' => $vuelo_id->random()->id,
        'user_id' => $user_id->random()->id,
        'fecha_despegue' =>$faker->dateTime,
        'fecha_aterrizaje' =>$faker->dateTime,
    ];
});
