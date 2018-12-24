<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaVuelo\Compania;

$factory->define(Compania::class, function (Faker $faker) {
    
    return [
        'direccion' => $faker->address,
    	'nombre' =>  $faker->company,
    ];
});
