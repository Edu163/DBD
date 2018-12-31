<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaAlojamiento\HabitacionServicio;

$factory->define(HabitacionServicio::class, function (Faker $faker) {
    
    /* Llaves foráneas */
    $servicio_alojamiento_id = DB::table('servicios_alojamientos')->select('id')->get();
    $habitacion_hotel_id = DB::table('habitaciones_hoteles')->select('id')->get();

    return [
    	'servicio_alojamiento_id' => $servicio_alojamiento_id->random()->id,
    	'habitacion_hotel_id' => $habitacion_hotel_id->random()->id,
    ];
});
