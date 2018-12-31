<?php

use Illuminate\Database\Seeder;
use App\Modulos\ReservaVehiculo\DetalleReservaVehiculo;

class DetallesReservasVehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(DetalleReservaVehiculo::class, 20)->create();
    }
}
