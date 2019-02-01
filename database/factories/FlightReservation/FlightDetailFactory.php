<?php

use Faker\Generator as Faker;
use App\Modules\FlightReservation\FlightDetail;

$factory->define(FlightDetail::class, function (Faker $faker) {
    /* Llaves foráneas */
    // $avion_id = DB::table('aviones')->select('id')->get();
	$flight_id = DB::table('flights')->select('id')->get();
    $origin_id = DB::table('airports')->select('id')->get();
    $destiny_id = DB::table('airports')->select('id')->get();
    $airport_id = DB::table('airports')->select('id')->get();

    return [
        //
        // 'avion_id' => $avion_id->random()->id,
        'flight_id' => $flight_id->random()->id,
        'airport_id' => $airport_id->random()->id,
        'origin_id' => $origin_id->random()->id,
        'destiny_id' => $destiny_id->random()->id,
        'fecha_despegue' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+ 2 days', $timezone = null),
        'fecha_aterrizaje' =>$faker->dateTimeBetween($startDate = '+ 2 days', $endDate = '+ 3 days', $timezone = null),
        'precio' => $faker->numberBetween($min = 500, $max = 5000)
    ];
});
