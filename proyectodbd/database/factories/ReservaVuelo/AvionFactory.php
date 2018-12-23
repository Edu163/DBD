<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaVuelo\Avion;

$factory->define(Avion::class, function (Faker $faker) {
    
    /* Llaves foráneas */
    $id_companias = DB::table('companias')->select('id')->get();
    
    return [
        'modelo' => $faker->lastName,
    	'motores' => $faker->randomElement($array = array (2,4)),
    	'color' => $faker->colorName,
    	'id_compania' => $id_companias->random()->id,
    ];
});
