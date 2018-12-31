<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaAlojamiento\ReservaHotel;

$factory->define(ReservaHotel::class, function (Faker $faker) {
	
	//Llaves foráneas
    $venta_id = DB::table('ventas')->select('id')->get();
	
	return [
    	'venta_id' => $venta_id->random()->id,
    	'precio' => $faker->numberBetween($min = 1000, $max = 999999),
    	'fecha' => $faker->dateTime($max = 'now', $timezone = null),
    	'cantidad' =>$faker->numberBetween($min = 1, $max = 10),
    	'monto_total' => $faker->numberBetween($min = 1000, $max = 999999),
    	'descuento' => $faker->numberBetween($min = 1000, $max = 999999),
    ];
});