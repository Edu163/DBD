<?php

use Faker\Generator as Faker;
<<<<<<< HEAD

$factory->define(Model::class, function (Faker $faker) {
    return [
    	'pais' => $faker->country,
    	'ciudad' => $faker->city,
    	'direccion' => $faker->address,
    	'nombre' =>  $faker->company, 	   //
=======
use App\Aeropuerto;

$factory->define(Aeropuerto::class, function (Faker $faker) {
    return [
        'pais' => $faker->country,
    	'ciudad' => $faker->city,
    	'direccion' => $faker->address,
    	'nombre' =>  $faker->company,
>>>>>>> development
    ];
});
