<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaVehiculo\Vehiculo;

$factory->define(Vehiculo::class, function (Faker $faker) {
    
    //Faker para vehiculos
    $faker->addProvider(new \MattWells\Faker\Vehicle\Provider($faker));

    //Llaves foráneas
    $calendario_vehiculo_id = DB::table('calendarios_vehiculos')->select('id')->get();
    $proveedor_id = DB::table('proveedores')->select('id')->get();
    $zona_id = DB::table('zonas')->select('id')->get();

    return [
        'patente' => $faker->vehicleRegistration,
        'calendario_vehiculo_id' => $calendario_vehiculo_id->random()->id,
        'proveedor_id' => $proveedor_id->random()->id,
        'zona_id' => $zona_id->random()->id,
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
