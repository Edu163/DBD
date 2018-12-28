<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaVuelo\CheckIn;

$factory->define(CheckIn::class, function (Faker $faker) {
    
    /* Llaves foráneas */
    $id_asiento = DB::table('asientos')->select('id')->get();
    $id_user = DB::table('users')->select('id')->get();

    return [
        'id_asiento' => $id_asiento->random()->id,
        'id_user' => $id_user->random()->id,
        'fecha' => $faker->date,
        'estado' => $faker->randomElement($array = array ('Confirmado','Pendiente')),
    ];
});
