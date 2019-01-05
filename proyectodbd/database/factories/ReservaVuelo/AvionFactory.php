<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaVuelo\Avion;

$factory->define(Avion::class, function (Faker $faker) {
    
    /* Llaves foráneas */
    $compania_id = DB::table('companias')->select('id')->get();
    
    return [
        'compania_id' => $compania_id->random()->id,
        'modelo' => $faker->lastName,
    ];
});
