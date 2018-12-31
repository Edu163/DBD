<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaAlojamiento\AlojamientoServicio;

$factory->define(AlojamientoServicio::class, function (Faker $faker) {

    /* LLaves foráneas */
    $servicio_alojamiento_id = DB::table('servicios_alojamientos')->select('id')->get();
    $alojamiento_privado_id = DB::table('alojamientos_privados')->select('id')->get();
    
    return [
    	'servicio_alojamiento_id' => $servicio_alojamiento_id->random()->id,
    	'alojamiento_privado_id' => $alojamiento_privado_id->random()->id,
    ];
});