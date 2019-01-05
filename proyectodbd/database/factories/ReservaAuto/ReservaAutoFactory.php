<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaVehiculo\ReservaVehiculo;

$factory->define(ReservaVehiculo::class, function (Faker $faker) {
    
    //Llaves foráneas
    $venta_id = DB::table('ventas')->select('id')->get();
    
    return [
        'venta_id' => $venta_id->random()->id,
        'fecha' => $faker->date,
        'monto_total' => rand(10000,99999),
    ];
});
