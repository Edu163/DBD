<?php

use Faker\Generator as Faker;

$factory->define(App\Compania::class, function (Faker $faker) {
    return [
        //
        'direccion' => $faker->address,
    	'nombre' =>  $faker->company,
    ];
});
