<?php

use Faker\Generator as Faker;
use App\Modules\HousingReservation\HotelRoom;

$factory->define(HotelRoom::class, function (Faker $faker) {
    //Llaves foráneas
    $hotel_id = DB::table('hotels')->select('id')->get();
	$housing_calendary_id = DB::table('housing_calendaries')->select('id')->get();
	
    return [
    	'hotel_id' => $hotel_id->random()->id,
    	'housing_calendary_id' => $housing_calendary_id->random()->id,
    	'capacidad' => $faker->numberBetween($min = 1000, $max = 999999),
    	'camas' => $faker->numberBetween($min = 1000, $max = 999999),
		'numero' => $faker->numberBetween($min = 1000, $max = 999999),
		'precio' => $faker->numberBetween($min = 1000, $max = 9999),
    ];
});
