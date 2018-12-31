<?php

use Illuminate\Database\Seeder;
use App\Modulos\ReservaVehiculo\ReservaVehiculo;

class ReservasVehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ReservaVehiculo::class, 20)->create();
    }
}
