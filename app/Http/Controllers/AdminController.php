<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Modules\VehicleReservation\VehicleProvider;
use App\Modules\VehicleReservation\Vehicle;
use App\Modules\VehicleReservation\Zone;
use App\Modules\HousingReservation\Hotel;
use App\Modules\HousingReservation\HotelRoom;
use App\Modules\FlightReservation\Airport;
use App\Modules\FlightReservation\FlightDetail;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        $vehicleProviders = VehicleProvider::all();
        $zones = Zone::all();
        $hotels = Hotel::all();
        $airports = Airport::all();
        $hotelRooms = HotelRoom::all();
        $flightDetails = FlightDetail::all();

        return view('admin.index', compact(
            'vehicleProviders',
            'vehicles',
            'zones',
            'hotels',
            'airports',
            'flightDetails',
            'hotelRooms'
        ));
    }
}
