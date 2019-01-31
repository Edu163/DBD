<?php

use Faker\Generator as Faker;
use App\Modules\VehicleReservation\VehicleReservation;

$factory->define(VehicleReservation::class, function (Faker $faker) {
    //Llaves foráneas
    $sell_id = DB::table('sells')->select('id')->get();
    
    return [
        'sell_id' => $sell_id->random()->id,
        'fecha' => $faker->date,
        'monto_total' => rand(10000,99999),
    ];
});
