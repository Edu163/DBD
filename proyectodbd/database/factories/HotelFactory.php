<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
    	'nombre' => $faker->name('it_IT');
    	'pais' => $faker->country;
    	'direccion' => $faker->address;
        //
    ];
});
