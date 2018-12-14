<?php

use App\ReservaHotel;
use Illuminate\Database\Seeder;

class ReservasHotelesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ReservaHotel::class, 10)->create();
    }
}
