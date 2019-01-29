<?php

use Illuminate\Database\Seeder;

class ServiceAndVehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ServiceAndVehicle::class, 20)->create();
    }
}
