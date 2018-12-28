<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaAlojamiento\Habitacion;

$factory->define(Habitacion::class, function (Faker $faker) {
	
	/* LLaves foráneas */
	$id_alojamiento_privado = DB::table('alojamientos_privados')->select('id')->get();
	
	return [
    	'id_alojamiento_privado' => $id_alojamiento_privado->random()->id,
    	'piso' => $faker->numberBetween($min = 1, $max = 30),
    	'numero' => $faker->numberBetween($min = 1, $max = 1000),
    	'camas' => $faker->numberBetween($min = 1, $max = 5),
    ];
});
