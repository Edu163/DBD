<?php

use Illuminate\Database\Seeder;
use App\Modulos\ReservaAlojamiento\ReservaHotel;


class ReservasHotelesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ReservaHotel::class, 20)->create();
    }
}
