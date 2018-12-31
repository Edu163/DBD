<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaAlojamiento\AlojamientoPrivado;

$factory->define(AlojamientoPrivado::class, function (Faker $faker) {

    /* LLaves foráneas */
	$calendario_alojamiento_id = DB::table('calendarios_alojamientos')->select('id')->get();
	
    return [
    	'calendario_alojamiento_id' => $calendario_alojamiento_id->random()->id,
    	'capacidad' => $faker->numberBetween($min = 1000, $max = 999999),
    	'direccion' => $faker->address,
	    'nombre' => $faker->name,
	    'estrella'=> $faker->numberBetween($min = 0, $max = 5),
	    'valoracion'=> $faker->numberBetween($min = 0, $max = 5),
	    'pais'=> $faker->country,
    ];
});
