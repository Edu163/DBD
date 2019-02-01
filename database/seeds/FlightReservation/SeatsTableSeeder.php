<?php

use Illuminate\Database\Seeder;
use App\Modules\FlightReservation\Seat;

class SeatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Seat::class, 20)->create();
    }
}
