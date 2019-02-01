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
            UsersTableSeeder::class,
            SellsTableSeeder::class,

            /* Vehiculos */
            VehicleReservationsTableSeeder::class,
            VehicleCalendariesTableSeeder::class,
            ZonesTableSeeder::class,
            VehicleProvidersTableSeeder::class,
            VehiclesTableSeeder::class,
            VehicleReservationDetailsTableSeeder::class,
            VehicleServicesTableSeeder::class,
            ServiceAndVehiclesTableSeeder::class,
            ServiceAndProvidersTableSeeder::class,

            /* Hoteles */
            HotelsTableSeeder::class,
            HotelReservationsTableSeeder::class,
            HousingServicesTableSeeder::class,
            HousingCalendariesTableSeeder::class,
            HotelRoomsTableSeeder::class,
            PrivateHousingsTableSeeder::class,
            RoomsTableSeeder::class,
            HousingAndServicesTableSeeder::class,
            ServiceAndRoomsTableSeeder::class,
            HotelReservationDetailsTableSeeder::class,

            /* Vuelos */
            AirportsTableSeeder::class,
            CompaniesTableSeeder::class,
            //AvionesSeeder::class,
            SeatsTableSeeder::class,
            FlightSellDetailsTableSeeder::class,
            FlightsTableSeeder::class,
            FlightDetailsTableSeeder::class,
            CheckInsTableSeeder::class,
            OriginDestiniesTableSeeder::class,
            FlightReservationsTableSeeder::class,

            /* Paquetes */
            PakagesTableSeeder::class,

            /* Cart */
            CartsTableSeeder::class,
        ]);
    }
}
