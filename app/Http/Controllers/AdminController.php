<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Modules\VehicleReservation\VehicleReservationDetail;
use App\Modules\VehicleReservation\VehicleReservation;
use App\Modules\VehicleReservation\VehicleProvider;
use App\Modules\VehicleReservation\Vehicle;
use App\Modules\VehicleReservation\Zone;
use App\Modules\HousingReservation\Hotel;
use App\Modules\HousingReservation\HotelReservation;
use App\Modules\HousingReservation\HotelReservationDetail;
use App\Modules\HousingReservation\HotelRoom;
use App\Modules\FlightReservation\Flight;
use App\Modules\FlightReservation\FlightDetail;
use App\Modules\FlightReservation\Airport;
use App\Modules\Others\Insurance;
use App\Modules\Others\InsuranceReservation;
use App\User;

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
        $vehicleReservations = VehicleReservation::all();
        $vehicleReservationDetails = VehicleReservationDetail::all();
        $vehicleProviders = VehicleProvider::all();
        $zones = Zone::all();

        $hotels = Hotel::all();
        $hotelRooms = HotelRoom::all();
        $hotelReservations = HotelReservation::all();
        $hotelReservationDetails = HotelReservationDetail::all();

        $airports = Airport::all();
        $flights = Flight::all();
        $flightDetails = FlightDetail::all();

        $insurances = Insurance::all();
        $insuranceReservations = InsuranceReservation::all();
        $users = User::all();

        return view('admin.index', compact(
            'vehicleReservationDetails',
            'vehicleReservations',
            'vehicleProviders',
            'vehicles',
            'zones',
            'airports',
            'flights',
            'flightDetails',
            'hotels',
            'hotelRooms',
            'hotelReservations',
            'hotelReservationDetails',
            'insurances',
            'insuranceReservations',
            'users'
        ));
    }

    public function upgradeToAdmin($id)
    {
        $user = User::find($id);
        $user->is_admin = 1;
        $user->save();

        return back();
    }

    public function downgradeAdmin($id)
    {
        $user = User::find($id);
        $user->is_admin = 0;
        $user->save();

        return back();
    }

    public function destroyUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return back();
    }

}
