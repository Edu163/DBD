<?php

use Faker\Generator as Faker;
use App\Modules\Others\Insurance;

$factory->define(Insurance::class, function (Faker $faker) {

     //Llaves foráneas
    $flight_id = DB::table('flights')->select('id')->get();

    return [
        'flight_id' => $flight_id->random()->id,
        'medicalService' => $faker->randomElement(['U$D 20.000 ','U$D 50.000 ','U$D 40.000 ','U$D 30.000 ','U$D 10.000 ','U$D 150.000 ']),
        'service2' => $faker->randomElement(['Localización de equipajes','Reembolso de gastos por vuelo demorado o cancelado','Asistencia en caso de robo o extravío de documentos']),
        'service3' => $faker->randomElement(['Incluye seguro por accidentes','Garantía de cancelación e interrupción de viaje por fuerza mayor','Hasta 365 días consecutivos de viaje']),
    ];
});
