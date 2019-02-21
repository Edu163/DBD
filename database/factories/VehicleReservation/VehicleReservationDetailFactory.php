<?php

use Faker\Generator as Faker;
use App\Modules\VehicleReservation\VehicleReservationDetail;

$factory->define(VehicleReservationDetail::class, function (Faker $faker) {
    //Llaves foráneas
    $vehicle_reservation_id = DB::table('vehicle_reservations')->select('id')->get();
    $patente = DB::table('vehicles')->select('patente')->get();

    return [
        'vehicle_reservation_id' => $vehicle_reservation_id->random()->id,
        'patente' => $patente->random()->patente,
        'fecha_retiro' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+2 weeks', $timezone = null),
        'fecha_regreso' => $faker->dateTimeBetween($startDate = '+2 weeks', $endDate = '+4 weeks', $timezone = null),
        'precio_reserva' => rand(500,2000),
        'descuento' =>  0.2,
        'cantidad' => rand(1,2),
    ];
});
