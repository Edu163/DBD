<?php

use App\Aeropuerto;
use Illuminate\Database\Seeder;

class AeropuertosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Aeropuerto::class, 10)->create();

        Aeropuerto::create([
    	    'pais' => 'Chile',
            'ciudad' => 'Santiago',
            'direccion' => 'Pudahuel',
            'nombre' => 'Arturo',
            ]);
            
    }
}
