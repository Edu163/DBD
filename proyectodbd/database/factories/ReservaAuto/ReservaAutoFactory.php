<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaAuto\ReservaAuto;

$factory->define(ReservaAuto::class, function (Faker $faker) {
    //Llaves foráneas
    $id_venta = DB::table('ventas')->select('id')->get();
    
    return [
        'id_venta' => $id_venta->random()->id,
        'fecha' => $faker->date,
        'monto_total' => rand(10000,99999),
    ];
});
