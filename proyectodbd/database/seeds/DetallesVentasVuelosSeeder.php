<?php

use Illuminate\Database\Seeder;
use App\DetalleVentaVuelo;
class DetallesVentasVuelosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(DetalleVentaVuelo::class, 20)->create();
    }
}
