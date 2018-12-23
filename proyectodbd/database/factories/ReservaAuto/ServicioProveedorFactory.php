<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaAuto\ServicioProveedor;

$factory->define(ServicioProveedor::class, function (Faker $faker) {
    
    //Llaves foráneas
    $id_servicio = DB::table('servicios_de_vehiculos')->select('id')->get();
    $id_proveedor = DB::table('proveedores')->select('id')->get();
    
    return [
        'id_servicio' => $id_servicio->random()->id,
        'id_proveedor' => $id_proveedor->random()->id,
    ];
});
