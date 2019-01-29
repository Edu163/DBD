<?php

use Illuminate\Database\Seeder;
use App\Modules\FlightReservation\Airports;

class AirportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Airports::class, 20)->create();
    }
}
