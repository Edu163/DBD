<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaVuelo\CheckIn;

$factory->define(CheckIn::class, function (Faker $faker) {
    
    /* Llaves foráneas */
    $asiento_id = DB::table('asientos')->select('id')->get();
    $user_id = DB::table('users')->select('id')->get();

    return [
        'asiento_id' => $asiento_id->random()->id,
        'user_id' => $user_id->random()->id,
        'fecha' => $faker->date,
        'estado' => $faker->randomElement($array = array ('Confirmado','Pendiente')),
    ];
});
