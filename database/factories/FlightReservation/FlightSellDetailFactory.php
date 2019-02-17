<?php

use Faker\Generator as Faker;
use App\Modules\FlightReservation\FlightSellDetail;

$factory->define(FlightSellDetail::class, function (Faker $faker) {
    /* Llaves foráneas */
    $sell_id = DB::table('sells')->select('id')->get();
    
    return [
        'sell_id' => $sell_id->random()->id,
        'precio' => $faker->numberBetween($min = 500, $max = 5000),
        'descuento' =>$faker->numberBetween($min = 10, $max = 500),
        'monto_total' =>$faker->numberBetween($min = 500, $max = 5000),
        'fecha' => $faker->dateTime,
        'tipo' => $faker->randomElement($array = array ('ida','vuelta')),
        'cantidad' => $faker->numberBetween($min = 1, $max = 5),
    ];
});
