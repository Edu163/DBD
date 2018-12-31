<?php

use Faker\Generator as Faker;

$factory->define(App\Venta::class, function (Faker $faker) {
    //Llaves foráneas
    $user_id = DB::table('users')->select('id')->get();
    
    return [
        'user_id' => $user_id->random()->id,
        'monto_total' => rand(10000,99999),
        'fecha' => $faker->date,
        'impuesto' => 0.19,
        'tipo_comprobante' => $faker->randomElement(['Factura','Boleta']),
        'metodo_pago' => $faker->randomElement(['Factura','Boleta']),
        'n_cuotas' => rand(0,24),
        'descuento' => rand(10000,99999),
    ];
});
