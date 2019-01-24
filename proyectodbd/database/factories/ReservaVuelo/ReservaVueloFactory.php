<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaVuelo\ReservaVuelo;
$factory->define(ReservaVuelo::class, function (Faker $faker) {
    $vuelo_id = DB::table('vuelos')->select('id')->get();
    return [
        'vuelo_id' => $vuelo_id->random()->id,
        'fecha' =>$faker->dateTime,
        'precio' => $faker->numberBetween($min = 500, $max = 5000),
        'tipo' => $faker->randomElement($array = array ('ida','vuelta')),
     ];
});
