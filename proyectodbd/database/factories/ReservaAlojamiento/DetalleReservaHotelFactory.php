<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaAlojamiento\DetalleReservaHotel;

$factory->define(DetalleReservaHotel::class, function (Faker $faker) {

    /* LLaves foráneas */
    $id_reserva_hotel = DB::table('reservas_hoteles')->select('id')->get();
    $id_habitacion_hotel = DB::table('habitaciones_hoteles')->select('id')->get();
	$id_alojamiento_privado = DB::table('alojamientos_privados')->select('id')->get();
	
    return [
    	'id_reserva_hotel' => $id_reserva_hotel->random()->id,
    	'id_habitacion_hotel' => $id_habitacion_hotel->random()->id,
    	'id_alojamiento_privado' => $id_alojamiento_privado->random()->id,
    	'fecha_ingreso' => $faker->date,
	    'fecha_egreso' => $faker->date,
	    'precio' => $faker->numberBetween($min = 1000, $max = 999999),
	    'tipo' => $faker->text,
    ];
});
