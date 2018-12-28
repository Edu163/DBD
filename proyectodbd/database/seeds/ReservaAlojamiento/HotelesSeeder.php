<?php

use Illuminate\Database\Seeder;
use App\Modulos\ReservaAlojamiento\Hotel;

class HotelesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Hotel::class, 20)->create();
    }
}
