<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaAlojamiento\Habitacion;

$factory->define(Habitacion::class, function (Faker $faker) {
	
	/* LLaves foráneas */
	$alojamiento_privado_id = DB::table('alojamientos_privados')->select('id')->get();
	
	return [
    	'alojamiento_privado_id' => $alojamiento_privado_id->random()->id,
    	'piso' => $faker->numberBetween($min = 1, $max = 30),
    	'numero' => $faker->numberBetween($min = 1, $max = 1000),
    	'camas' => $faker->numberBetween($min = 1, $max = 5),
    ];
});
