<?php

use Illuminate\Database\Seeder;

class VehicleCalendariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(VehicleCalendary::class, 20)->create();
    }
}
