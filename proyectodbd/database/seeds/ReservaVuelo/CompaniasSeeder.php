<?php

use Illuminate\Database\Seeder;
use App\Modulos\ReservaVuelo\Compania;

class CompaniasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Compania::class, 20)->create();
    }
}
