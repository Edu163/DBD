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

            /* Vehiculos */
            ReservasVehiculosSeeder::class,
            CalendariosVehiculosSeeder::class,
            ZonasSeeder::class,
            ProveedoresSeeder::class,
            VehiculosSeeder::class,
            DetallesReservasVehiculosSeeder::class,
            ServiciosDeVehiculosSeeder::class,
            //ServiciosYVehiculosSeeder::class,
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
            ChecksInSeeder::class,
            OrigenesDestinosSeeder::class,

            /* Paquetes */

        ]);
    }
}
