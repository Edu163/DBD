<?php

use Faker\Generator as Faker;

$factory->define(App\ServicioAlojamiento::class, function (Faker $faker) {
	$id_hotel = DB::table('hoteles')->select('id')->get();
    return [
    	'id_hotel' => $id_hotel->random()->id,
        'nombre' => $faker->name,
    	'precio' => $faker->numberBetween($min = 1000, $max = 999999),
    	'descripcion' => $faker->text,
    ];
});