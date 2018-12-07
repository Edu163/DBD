<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
    	'pais' => $faker->country,
    	'ciudad' => $faker->city,
    	'direccion' => $faker->address,
    	'nombre' =>  $faker->company, 	   //
    ];
});
