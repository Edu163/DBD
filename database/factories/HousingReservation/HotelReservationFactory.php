<?php

use Faker\Generator as Faker;
use App\Modules\HousingReservation\HotelReservation;

$factory->define(HotelReservation::class, function (Faker $faker) {
    //Llaves foráneas
    $sell_id = DB::table('sells')->select('id')->get();
	
	return [
    	'sell_id' => $sell_id->random()->id,
    	'precio' => $faker->numberBetween($min = 1000, $max = 999999),
    	'fecha' => $faker->dateTime($max = 'now', $timezone = null),
    	'cantidad' =>$faker->numberBetween($min = 1, $max = 10),
    	'monto_total' => $faker->numberBetween($min = 1000, $max = 999999),
    	'descuento' => $faker->numberBetween($min = 1000, $max = 999999),
    ];
});
