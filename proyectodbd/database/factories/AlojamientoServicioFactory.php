<?php

use Faker\Generator as Faker;

$factory->define(App\AlojamientoServicio::class, function (Faker $faker) {
    $id_servicio_alojamiento = DB::table('servicios_alojamientos')->select('id')->get();
    $id_alojamiento_privado = DB::table('alojamientos_privados')->select('id')->get();
    return [
    	'id_servicio_alojamiento' => $id_servicio_alojamiento->random()->id,
    	'id_alojamiento_privado' => $id_alojamiento_privado->random()->id,
    ];
});