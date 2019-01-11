<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaAlojamiento\DetalleReservaHotel;

$factory->define(DetalleReservaHotel::class, function (Faker $faker) {

    /* LLaves foráneas */
    $reserva_hotel_id = DB::table('reservas_hoteles')->select('id')->get();
    $habitacion_hotel_id = DB::table('habitaciones_hoteles')->select('id')->get();
	$alojamiento_privado_id = DB::table('alojamientos_privados')->select('id')->get();
	
    return [
    	'reserva_hotel_id' => $reserva_hotel_id->random()->id,
    	'habitacion_hotel_id' => $habitacion_hotel_id->random()->id,
    	'alojamiento_privado_id' => $alojamiento_privado_id->random()->id,
    	'fecha_ingreso' => $faker->date,
	    'fecha_egreso' => $faker->date,
	    'precio' => $faker->numberBetween($min = 1000, $max = 999999),
	    'tipo' => $faker->text,
    ];
});
