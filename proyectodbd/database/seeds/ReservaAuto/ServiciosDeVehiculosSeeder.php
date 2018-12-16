<?php

use Illuminate\Database\Seeder;
use App\Modulos\ReservaAuto\ServicioDeVehiculo;

class ServiciosDeVehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ServicioDeVehiculo::class, 20)->create();
    }
}
