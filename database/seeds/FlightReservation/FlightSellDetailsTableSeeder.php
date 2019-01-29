<?php

use Illuminate\Database\Seeder;
use App\Modules\FlightReservation\FlightSellDetails;

class FlightSellDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(FlightSellDetails::class, 20)->create();
    }
}
