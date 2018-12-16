<?php

use Faker\Generator as Faker;

$factory->define(App\HabitacionServicio::class, function (Faker $faker) {
    
    /* Llaves foráneas */
    $id_servicio_alojamiento = DB::table('servicios_alojamientos')->select('id')->get();
    $id_habitacion_hotel = DB::table('habitaciones_hoteles')->select('id')->get();

    return [
    	'id_servicio_alojamiento' => $id_servicio_alojamiento->random()->id,
    	'id_habitacion_hotel' => $id_habitacion_hotel->random()->id,
    ];
});
