<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaVehiculo\ServicioDeVehiculo;

$factory->define(ServicioDeVehiculo::class, function (Faker $faker) {
    
    return [
        'nombre_servicio' => $faker->randomElement(['Servicio1','Servicio2', 'Servicio3']),
        'duracion' => rand(1,48),
    ];
});
