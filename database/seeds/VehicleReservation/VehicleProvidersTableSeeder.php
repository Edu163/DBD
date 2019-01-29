<?php

use Illuminate\Database\Seeder;

class VehicleProvidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(VehicleProviders::class, 20)->create();
    }
}
