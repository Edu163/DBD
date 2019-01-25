<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaAlojamiento\HabitacionHotel;


$factory->define(HabitacionHotel::class, function (Faker $faker) {

	//Llaves foráneas
    $hotel_id = DB::table('hoteles')->select('id')->get();
	$calendario_alojamiento_id = DB::table('calendarios_alojamientos')->select('id')->get();
	
    return [
    	'hotel_id' => $hotel_id->random()->id,
    	'calendario_alojamiento_id' => $calendario_alojamiento_id->random()->id,
    	'capacidad' => $faker->numberBetween($min = 1000, $max = 999999),
    	'camas' => $faker->numberBetween($min = 1000, $max = 999999),
		'numero' => $faker->numberBetween($min = 1000, $max = 999999),
		'precio' => $faker->numberBetween($min = 1000, $max = 9999),
    ];
});