<?php

use Faker\Generator as Faker;

$factory->define(App\ReservaHotel::class, function (Faker $faker) {
	//Llaves foráneas
    $id_venta = DB::table('ventas')->select('id')->get();
    return [
    	'id_venta' => $id_venta->random()->id,
    	'precio' => $faker->numberBetween($min = 1000, $max = 999999),
    	'fecha' => $faker->dateTime($max = 'now', $timezone = null),
    	'cantidad' => $faker->seed(10),
    	'monto_total' => $faker->numberBetween($min = 1000, $max = 999999),
    	'descuento' => $faker->numberBetween($min = 1000, $max = 999999),
    ];
});