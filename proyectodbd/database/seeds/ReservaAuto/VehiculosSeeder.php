<?php

use Illuminate\Database\Seeder;
use App\Modulos\ReservaVehiculo\Vehiculo;

class VehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Vehiculo::class, 20)->create();
    }
}
