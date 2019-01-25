<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaVuelo\Asiento;

$factory->define(Asiento::class, function (Faker $faker) {
    
    /* Llaves foráneas */
    $detalle_vuelo_id = DB::table('detalles_vuelos')->select('id')->get();
    
    return [
        'detalle_vuelo_id' => $detalle_vuelo_id->random()->id,
        'numero' => $faker->randomDigit,
        'letra' => $faker->randomElement($array = array ('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s')),
        'tipo' => $faker->randomElement($array = array ('cama','doble','discapacitados')),
        'clase' => $faker->randomElement($array = array ('turista','premium','business')),
        'disponible' => $faker->boolean,
    ];
});
