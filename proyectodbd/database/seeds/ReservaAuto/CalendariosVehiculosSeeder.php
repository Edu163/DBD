<?php

use Illuminate\Database\Seeder;
use App\Modulos\ReservaVehiculo\CalendarioVehiculo;

class CalendariosVehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CalendarioVehiculo::class, 20)->create();
    }
}
