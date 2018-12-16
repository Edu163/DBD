<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaAuto\DetalleReservaAuto;

$factory->define(DetalleReservaAuto::class, function (Faker $faker) {
    //Llaves foráneas
    $id_res_auto = DB::table('reservas_autos')->select('id')->get();
    $patente = DB::table('automoviles')->select('patente')->get();

    return [
        'id_res_auto' => $id_res_auto->random()->id,
        'patente' => $patente->random()->patente,
        'fecha_retiro' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+2 weeks', $timezone = null),
        'fecha_regreso' => $faker->dateTimeBetween($startDate = '+2 weeks', $endDate = '+4 weeks', $timezone = null),
        'precio_reserva' => rand(50000,200000),
        'descuento' =>  0.2,
        'cantidad' => rand(1,2),
    ];
});
