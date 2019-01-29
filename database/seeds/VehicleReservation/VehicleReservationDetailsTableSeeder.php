<?php

use Illuminate\Database\Seeder;

class VehicleReservationDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(VehicleReservationDetail::class, 20)->create();
    }
}
