<?php

use Illuminate\Database\Seeder;
use App\Modulos\ReservaAuto\ServicioYVehiculo;

class ServiciosYVehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ServicioYVehiculo::class, 20)->create();
    }
}
