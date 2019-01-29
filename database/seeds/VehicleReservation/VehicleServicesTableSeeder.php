<?php

use Illuminate\Database\Seeder;

class VehicleServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(VehicleService::class, 20)->create();
    }
}
