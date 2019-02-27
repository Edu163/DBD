<?php

use Faker\Generator as Faker;
use App\Modules\FlightReservation\Airport;

$factory->define(Airport::class, function (Faker $faker){
    $flight_id = DB::table('cities')->select('id')->get();
    return [
        'ciudad_id' => $flight_id->random()->id,
        'pais' => $faker->country,
    	'ciudad' => $faker->city,
    	'direccion' => $faker->address,
    	'nombre' =>  $faker->company,
    ];
});
