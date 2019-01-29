<?php

use Illuminate\Database\Seeder;
use App\Modules\FlightReservation\Flight;

class FlightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Flight::class, 20)->create();
    }
}
