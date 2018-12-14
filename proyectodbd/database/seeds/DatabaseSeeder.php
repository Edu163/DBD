<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            /* General */
            UsersSeeder::class,

            /* Autos */

            /* Hoteles */

            /* Vuelos */
            AeropuertosSeeder::class,
            //AvionesSeeder::class,
            CompaniasSeeder::class,
            AvionesSeeder::class,
            AsientosSeeder::class,
            DetallesVentasVuelosSeeder::class,
            VuelosSeeder::class,
            DetallesVuelosSeeder::class,
            /* Reservas */

            /* Paquetes */

        ]);
    }
}
