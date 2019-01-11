<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaVehiculo\ServicioYVehiculo;

$factory->define(ServicioYVehiculo::class, function (Faker $faker) {
    
    //Llaves foráneas
    $servicio_id = DB::table('servicios_de_vehiculos')->select('id')->get();
    $patente = DB::table('vehiculos')->select('patente')->get();
    
    return [
        'servicio_id' => $servicio_id->random()->id,
        'patente' => $patente->random()->patente,
        'precio' => rand(10000,99999),
    ];
});
