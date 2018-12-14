<?php

use Faker\Generator as Faker;

$factory->define(App\Asiento::class, function (Faker $faker) {
	$avion_id = DB::table('aviones')->select('id')->get();
    return [
        //
        'numero' => $faker->randomDigit,
        'letra' => $faker->randomElement($array = array ('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s')),
        'tipo' => $faker->randomElement($array = array ('cama','doble','discapacitados')),
        'clase' => $faker->randomElement($array = array ('turista','premium','business')),
        'disponible' => $faker->boolean,
        'id_avion' => $avion_id->random()->id,
    ];
});
