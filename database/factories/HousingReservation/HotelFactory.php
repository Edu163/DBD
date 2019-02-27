<?php

use Faker\Generator as Faker;
use App\Modules\HousingReservation\Hotel;

$factory->define(Hotel::class, function (Faker $faker) {
	//Llaves foráneas
	$city_id = DB::table('cities')->select('id')->get();
	
    return [
    		'nombre' =>  $faker->company,
    		'pais' => $faker->country,
    		'direccion' => $city_id->random()->id,
			'estrellas' => $faker->numberBetween($min = 1, $max = 5),
			'valoracion'=> $faker->numberBetween($min = 0, $max = 10),
			'capacidad'=> $faker->numberBetween($min = 0, $max = 9999),
    ];
});
