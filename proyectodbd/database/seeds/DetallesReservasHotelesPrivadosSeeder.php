<?php

use App\DetalleReservaHotel;
use Illuminate\Database\Seeder;

class DetallesReservasHotelesPrivadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(DetalleReservaHotel::class, 10)->create();
    }
}
