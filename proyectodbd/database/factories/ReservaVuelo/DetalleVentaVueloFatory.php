<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaVuelo\DetalleVentaVuelo;

$factory->define(DetalleVentaVuelo::class, function (Faker $faker) {

     /* Llaves foráneas */
     $venta_id = DB::table('ventas')->select('id')->get();
    
    return [
        'venta_id' => $venta_id->random()->id,
        'precio' => $faker->numberBetween($min = 500, $max = 5000),
        'descuento' =>$faker->numberBetween($min = 10, $max = 500),
        'monto_total' =>$faker->numberBetween($min = 500, $max = 5000),
        'fecha' => $faker->dateTime,
        'tipo' => $faker->randomElement($array = array ('ida','vuelta')),
        'cantidad' => $faker->numberBetween($min = 1, $max = 5),
    ];
});
