<?php

use Illuminate\Database\Seeder;
use App\Modules\VehicleReservation\Vehicle;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Vehicle::class, 500)->create();
    }
}
