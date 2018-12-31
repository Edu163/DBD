<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaVehiculo\ServicioProveedor;

$factory->define(ServicioProveedor::class, function (Faker $faker) {
    
    //Llaves foráneas
    $servicio_id = DB::table('servicios_de_vehiculos')->select('id')->get();
    $proveedor_id = DB::table('proveedores')->select('id')->get();
    
    return [
        'servicio_id' => $servicio_id->random()->id,
        'proveedor_id' => $proveedor_id->random()->id,
    ];
});
