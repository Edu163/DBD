<?php

use Illuminate\Database\Seeder;

class HotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Hotel::class, 10)->create();
        Hotel::create([
        	'id_hotel' => 999,
        	'nombre' => 'Cheraton',
        	'pais' => 'Chile',
        	'direccion' => 'Chile',
        	'estrellas' => 5,
    		'valoracion' => 99,
    		'capacidad' => 99]);

        
    }
}
