<?php

use Faker\Generator as Faker;

$factory->define(App\Vuelo::class, function (Faker $faker) {
	$detventavuelo_id = DB::table('detalles_ventas_vuelos')->select('id')->get();
    return [
        //
        'id_detalle_venta_vuelo' => $detventavuelo_id->random()->id,
        'precio' => $faker->numberBetween($min = 500, $max = 5000),
    ];
});
