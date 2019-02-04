<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $zones = Zone::all();
        $hotels = Hotel::all();
        $airports = Airport::all();
        $hotelRooms = HotelRoom::all();
        $flightDetails = FlightDetail::all();

        return view('admin', compact(
            'zones',
            'hotels',
            'airports',
            'flightDetails',
            'hotelRooms'
        ));
    }
}
