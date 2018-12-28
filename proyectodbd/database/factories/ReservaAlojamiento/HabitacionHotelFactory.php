<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaAlojamiento\HabitacionHotel;


$factory->define(HabitacionHotel::class, function (Faker $faker) {

	//Llaves foráneas
    $id_hotel = DB::table('hoteles')->select('id')->get();
	$id_calendario_alojamiento = DB::table('calendarios_alojamientos')->select('id')->get();
	
    return [
    	'id_hotel' => $id_hotel->random()->id,
    	'id_calendario_alojamiento' => $id_calendario_alojamiento->random()->id,
    	'capacidad' => $faker->numberBetween($min = 1000, $max = 999999),
    	'camas' => $faker->numberBetween($min = 1000, $max = 999999),
    	'numero' => $faker->numberBetween($min = 1000, $max = 999999),
    ];
});