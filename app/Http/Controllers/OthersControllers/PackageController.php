<?php

namespace App\Http\Controllers\OthersControllers;

use App\Modules\Others\Package;
use App\Modules\HousingReservation\Hotel;
use App\Modules\FlightReservation\FlightDetail;
use App\Modules\VehicleReservation\Vehicle;
use App\Modules\VehicleReservation\Zone;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::all()->where('pais', request('zona_id'));
        $packages = Package::all()->where('pais', request('zona_id'));
        return view('modules.others.package.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        //
    }

    public function va()
    {
        //$hotels = Hotel::all()->where('pais', request('destino-packageOne'));
        $params = $this->validate(request(), [
                'origen' => 'required|integer',
                'destino' => 'required|integer',
                'fechaida' => 'required|date',
            ]);
        $hotels = Hotel::all();
        $flights = FlightDetail::all();
        $packages = Package::all();
        return view('modules.others.package.index', compact('packages'));
        //return view('modules.others.package.indexva', compact('hotels','flights'));
        
    }

    public function vv()
    {
        $flights = FlightDetail::all();
        $pasajeros = request('pasajeros');
        $vehicles = Vehicle::where('zone_id', request('zone'))
                    ->where('n_pasajeros', '>=', (int)$pasajeros)
                    ->get();
        return view('modules.others.package.indexvv', compact('flights','vehicles'));
    }

    public function vav()
    {
        $flights = FlightDetail::all();
        $pasajeros = request('pasajeros');
        $vehicles = Vehicle::where('zone_id', request('zone'))
                    ->where('n_pasajeros', '>=', (int)$pasajeros)
                    ->get();
        $hotels = Hotel::all()->where('pais', request('destino-packageThree'));
        return view('modules.others.package.indexvav', compact('hotels','flights','vehicles'));
    }
}
