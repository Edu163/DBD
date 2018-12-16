<?php

use Faker\Generator as Faker;

$factory->define(App\DetalleVentaVuelo::class, function (Faker $faker) {
    return [
        //
        'precio' => $faker->numberBetween($min = 500, $max = 5000),
        'descuento' =>$faker->numberBetween($min = 10, $max = 500),
        'monto_total' =>$faker->numberBetween($min = 500, $max = 5000),
        'fecha' => $faker->dateTime,
        'tipo' => $faker->randomElement($array = array ('ida','vuelta')),
        'cantidad' => $faker->numberBetween($min = 1, $max = 5),
    ];
});
