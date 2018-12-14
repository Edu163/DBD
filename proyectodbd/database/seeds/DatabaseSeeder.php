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
            HotelesSeeder::class,
            ReservasHotelesSeeder::class,
            ServiciosAlojamientosSeeder::class,
            CalendariosAlojamientosSeeder::class,
            HabitacionesHotelesSeeder::class,
            AlojamientosPrivadosSeeder::class,
            DetallesReservasHotelesSeeder::class,
            HabitacionesSeeder::class,
            AlojamientosServiciosSeeder::class,
            HabitacionesServiciosSeeder::class,
            /* Vuelos */
            AeropuertosSeeder::class,

            /* Reservas */

            /* Paquetes */

        ]);
    }
}
