<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Modules\VehicleReservation\Zone;
use App\Modules\HousingReservation\Hotel;
use App\Modules\HousingReservation\HotelRoom;
use App\Modules\FlightReservation\Airport;
use App\Modules\FlightReservation\FlightDetail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        return view('home', compact(
            'zones',
            'hotels',
            'airports',
            'flightDetails',
            'hotelRooms'
        ));
    }
}
