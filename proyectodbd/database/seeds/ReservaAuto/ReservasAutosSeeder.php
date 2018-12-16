<?php

use Illuminate\Database\Seeder;
use App\Modulos\ReservaAuto\ReservaAuto;

class ReservasAutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ReservaAuto::class, 20)->create();
    }
}
