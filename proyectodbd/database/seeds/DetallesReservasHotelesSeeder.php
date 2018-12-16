<?php

use App\DetalleReservaHotel;
use Illuminate\Database\Seeder;

class DetallesReservasHotelesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(DetalleReservaHotel::class, 20)->create();
    }
}
