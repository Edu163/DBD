<?php

use Illuminate\Database\Seeder;
use App\Modulos\ReservaVuelo\CheckIn;

class ChecksInSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CheckIn::class, 20)->create();
    }
}
