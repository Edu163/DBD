<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaAuto\ServicioYVehiculo;

$factory->define(ServicioYVehiculo::class, function (Faker $faker) {
    
    //Llaves foráneas
    $id_servicio = DB::table('servicios_de_vehiculos')->select('id')->get();
    $patente = DB::table('automoviles')->select('patente')->get();
    
    return [
        'id_servicio' => $id_servicio->random()->id,
        'patente' => $patente->random()->patente,
        'precio' => rand(10000,99999),
    ];
});
