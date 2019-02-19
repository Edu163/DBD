<?php

use Faker\Generator as Faker;
use App\Modules\Others\Package;

$factory->define(Package::class, function (Faker $faker) {
    /* Llaves Foráneas */
    $flight_id = DB::table('flights')->select('id')->get();
    $hotel_id = DB::table('hotels')->select('id')->get();
    $vehicle_id = DB::table('vehicles')->select('id')->get();

    return [
        'flight_id' => $flight_id->random()->id,
        'hotel_id' => $hotel_id->random()->id,
        'vehicle_id' => $vehicle_id->random()->id,
        'fecha_inicio' => $faker->dateTimeBetween($startDate = '+2 weeks', $endDate = '+4 weeks', $timezone = null),
        'fecha_fin' => $faker->dateTimeBetween($startDate = '+2 weeks', $endDate = '+4 weeks', $timezone = null),
    ];
});
