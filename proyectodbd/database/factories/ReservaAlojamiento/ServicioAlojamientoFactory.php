<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaAlojamiento\ServicioAlojamiento;

$factory->define(ServicioAlojamiento::class, function (Faker $faker) {

	/* Llaves foráneas */
	$hotel_id = DB::table('hoteles')->select('id')->get();
	
    return [
    	'hotel_id' => $hotel_id->random()->id,
        'nombre' => $faker->name,
    	'precio' => $faker->numberBetween($min = 1000, $max = 999999),
    	'descripcion' => $faker->text,
    ];
});