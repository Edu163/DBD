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
            VentasSeeder::class,

            /* Autos */
            ReservasAutosSeeder::class,
            CalendariosVehiculosSeeder::class,
            ZonasSeeder::class,
            ProveedoresSeeder::class,
            AutomovilesSeeder::class,
            DetallesReservasAutosSeeder::class,
            ServiciosDeVehiculosSeeder::class,
            ServiciosYVehiculosSeeder::class,
            ServiciosProveedoresSeeder::class,

            /* Hoteles */

            /* Vuelos */
            AeropuertosSeeder::class,

            

            /* Paquetes */

        ]);
    }
}
