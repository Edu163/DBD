<?php

use Faker\Generator as Faker;

$factory->define(App\HabitacionServicio::class, function (Faker $faker) {
    //Llaves foráneas
    $id_servicio_alojamiento = DB::table('servicios_alojamientos')->select('id')->get();
    $id_aeropuerto = DB::table('aeropuertos')->select('id')->get();
    return [
    	'id_servicio_alojamiento' => $id_servicio_alojamiento->random()->id,
    	'id_aeropuerto' => $id_aeropuerto->random()->id,
    ];
});
