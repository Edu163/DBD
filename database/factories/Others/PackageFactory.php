<?php


use App\Modules\HousingReservation\Hotel;
use App\Modules\FlightReservation\FlightDetail;
use App\Modules\FlightReservation\Airport;
use App\Modules\VehicleReservation\Vehicle;
use App\Modules\VehicleReservation\Zone;
use Faker\Generator as Faker;
use App\Modules\Others\Package;

$factory->define(Package::class, function (Faker $faker) {
    /* Llaves Foráneas */
    $flight_id = DB::table('flights')->select('id')->get();
    $hotel_id = DB::table('hotels')->select('id')->get();
    $vehicle_id = DB::table('vehicles')->select('id')->get();

    $id_flight = $flight_id->random()->id;
    $id_hotel = $hotel_id->random()->id;
    $id_vehicle = $vehicle_id->random()->id;

    $flight = FlightDetail::findOrfail($id_flight);
    $hotel = Hotel::findOrfail($id_hotel);
    $vehicle = Vehicle::findOrfail($id_vehicle);

    $id_zone = $vehicle->zone_id;
    $zone = Zone::findOrfail($id_zone);
    /* Dirección vehículo*/
    $city_vehicle = $zone->ciudad_id;

    $id_destiny = $flight->destiny_id;
    $airport = Airport::findOrfail($id_destiny);
    /** Destino vuelo */
    $city_airport = $airport->ciudad_id;
    /** Destino hotel $city_hotel */
    $city_hotel = $hotel->ciudad_id;

    $count = 0;
    while($count <= 5)
    {
        if($city_hotel != $city_airport)
        {
            $id_hotel = $hotel_id->random()->id;
            $hotel = Hotel::findOrfail($id_hotel);
            $city_hotel = $hotel->direccion;
            $count = $count + 1;
        }
    }
    if($count == 5)
    {
        $id_hotel = null;
    }



    $count = 0;
    while($count <= 5)
    {
        if($city_vehicle != $city_airport)
        {
            $id_vehicle = $vehicle_id->random()->id;
            $id_zone = $vehicle->zone_id;
            $zone = Zone::findOrfail($id_zone);
            $city_vehicle = $zone->direccion;
            $count = $count + 1;
        }
    }
    if($count == 5)
    {
        $id_hotel = null;
    }
    return [
        'flight_id' =>$id_flight,
        'hotel_id' => $id_hotel,
        'vehicle_id' => $id_vehicle,
        'fecha_inicio' => $faker->dateTimeBetween($startDate = '+2 weeks', $endDate = '+4 weeks', $timezone = null),
        'fecha_fin' => $faker->dateTimeBetween($startDate = '+2 weeks', $endDate = '+4 weeks', $timezone = null),
    ];
});