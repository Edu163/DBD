<?php

use Faker\Generator as Faker;
<<<<<<< HEAD
<<<<<<< HEAD

$factory->define(Model::class, function (Faker $faker) {
    return [
    	'pais' => $faker->country,
    	'ciudad' => $faker->city,
    	'direccion' => $faker->address,
    	'nombre' =>  $faker->company, 	   //
=======
use App\Aeropuerto;
=======
>>>>>>> master

$factory->define(App\Aeropuerto::class, function (Faker $faker) {
    return [
        'pais' => $faker->country,
    	'ciudad' => $faker->city,
    	'direccion' => $faker->address,
    	'nombre' =>  $faker->company,
>>>>>>> development
    ];
});
