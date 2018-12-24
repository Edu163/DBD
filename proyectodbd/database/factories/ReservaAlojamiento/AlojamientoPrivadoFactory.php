<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaAlojamiento\AlojamientoPrivado;

$factory->define(AlojamientoPrivado::class, function (Faker $faker) {

    /* LLaves foráneas */
	$id_calendario_alojamiento = DB::table('calendarios_alojamientos')->select('id')->get();
	
    return [
    	'id_calendario_alojamiento' => $id_calendario_alojamiento->random()->id,
    	'capacidad' => $faker->numberBetween($min = 1000, $max = 999999),
    	'direccion' => $faker->address,
	    'nombre' => $faker->name,
	    'estrella'=> $faker->numberBetween($min = 0, $max = 5),
	    'valoracion'=> $faker->numberBetween($min = 0, $max = 5),
	    'pais'=> $faker->country,
    ];
});