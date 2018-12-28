<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaAuto\Automovil;

$factory->define(Automovil::class, function (Faker $faker) {
    //Faker para automóviles
    $faker->addProvider(new \MattWells\Faker\Vehicle\Provider($faker));

    //Llaves foráneas
    $id_calendario_vehiculo = DB::table('calendarios_vehiculos')->select('id')->get();
    $id_proveedor = DB::table('proveedores')->select('id')->get();
    $id_zona = DB::table('zonas')->select('id')->get();

    return [
        'patente' => $faker->vehicleRegistration,
        'id_calendario_vehiculo' => $id_calendario_vehiculo->random()->id,
        'id_proveedor' => $id_proveedor->random()->id,
        'id_zona' => $id_zona->random()->id,
        'marca' => $faker->vehicleMake,
        'tipo' => $faker->randomElement(['Minivan','Automovil','Camioneta']),
        'gamma' => $faker->randomElement(['Baja','Media', 'Alta']),
        'transmision' => $faker->randomElement(['Manual','Automática']),
        'combustible' => $faker->randomElement(['Bencina','Petróleo']),
        'n_pasajeros' => rand(1,4),
        'equipaje_g' => rand(1,5),
        'equipaje_p' => rand(1,5),
        'n_puertas' => 4,
        'n_kilometraje' => rand(10000,99999),
        'precio_hora' => rand(10000,99999),
        'aire_acondicionado' => $faker->boolean,
    ];
});
