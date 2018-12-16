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
            HotelesSeeder::class,
            ReservasHotelesSeeder::class,
            ServiciosAlojamientosSeeder::class,
            CalendariosAlojamientosSeeder::class,
            HabitacionesHotelesSeeder::class,
            AlojamientosPrivadosSeeder::class,
            HabitacionesSeeder::class,
            AlojamientosServiciosSeeder::class,
            HabitacionesServiciosSeeder::class,
            DetallesReservasHotelesSeeder::class,

            /* Vuelos */
            AeropuertosSeeder::class,
            CompaniasSeeder::class,
            AvionesSeeder::class,
            AsientosSeeder::class,
            DetallesVentasVuelosSeeder::class,
            VuelosSeeder::class,
            DetallesVuelosSeeder::class,

            /* Paquetes */

        ]);
    }
}
