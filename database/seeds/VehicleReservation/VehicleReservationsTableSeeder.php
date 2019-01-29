<?php

use Illuminate\Database\Seeder;

class VehicleReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(VehicleReservation::class, 20)->create();
    }
}
