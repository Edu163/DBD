<?php

use Illuminate\Database\Seeder;
use App\Modulos\ReservaAuto\Zona;

class ZonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Zona::class, 20)->create();
    }
}
