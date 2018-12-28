<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaVuelo\Asiento;

$factory->define(Asiento::class, function (Faker $faker) {
    
    /* Llaves foráneas */
    $dv_id = DB::table('detalles_vuelos')->select('id')->get();
    
    return [
        'numero' => $faker->randomDigit,
        'letra' => $faker->randomElement($array = array ('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s')),
        'tipo' => $faker->randomElement($array = array ('cama','doble','normal')),
        'clase' => $faker->randomElement($array = array ('turista','premium','business')),
        'disponible' => $faker->boolean,
        'id_detalle_vuelo' => $dv_id->random()->id,
    ];
});
