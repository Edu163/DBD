<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaVehiculo\DetalleReservaVehiculo;

$factory->define(DetalleReservaVehiculo::class, function (Faker $faker) {
    
    //Llaves foráneas
    $reserva_vehiculo_id = DB::table('reservas_vehiculos')->select('id')->get();
    $patente = DB::table('vehiculos')->select('patente')->get();
    return [
        'reserva_vehiculo_id' => $reserva_vehiculo_id->random()->id,
        'patente' => $patente->random()->patente,
        'fecha_retiro' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+2 weeks', $timezone = null),
        'fecha_regreso' => $faker->dateTimeBetween($startDate = '+2 weeks', $endDate = '+4 weeks', $timezone = null),
        'precio_reserva' => rand(50000,200000),
        'descuento' =>  0.2,
        'cantidad' => rand(1,2),
    ];
});
