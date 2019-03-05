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
        if(count($packages)>0)
        {
            return view('modules.others.package.index', compact('packages'));
        }
        else{
            return view('modules.others.package.noDisp');
        }
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
        $hotels = Hotel::all()->where('ciudad', request('destino-packageOne'));
        $destino = request('destino-packageOne');
        //dd($destino);
        $array_id = [];
		foreach($hotels as $hotel)
		{
			$array_id[] = $hotel->id;
        }
        //dd($array_id);
        $packages = Package::all()->where('type', 1)
                                  ->whereIn('hotel_id', $array_id);
        if(count($packages)>0)
        {
            return view('modules.others.package.index', compact('packages'));
        }
        else{
            return view('modules.others.package.noDisp');
        }
    }

    public function vv()
    {
        $vehicles = Vehicle::all()->where('ciudad', request('destino'));
        $destino = request('destino');
        //dd($destino);
        $array_id = [];
		foreach($vehicles as $vehicle)
		{
			$array_id[] = $vehicle->id;
        }
        //dd($array_id);
        $packages = Package::all()->where('type', 2)
                                  ->whereIn('vehicle_id', $array_id);
        if(count($packages)>0)
        {
            return view('modules.others.package.index', compact('packages'));
        }
        else{
            return view('modules.others.package.noDisp');
        }
    }

    public function vav()
    {
        $hotels = Hotel::all()->where('ciudad', request('destino'));
        $destino = request('destino');
        //dd($destino);
        $array_id = [];
		foreach($hotels as $hotel)
		{
			$array_id[] = $hotel->id;
        }
        //dd($array_id);
        $packages = Package::all()->where('type', 3)
                                  ->whereIn('hotel_id', $array_id);
        if(count($packages)>0)
        {
            return view('modules.others.package.index', compact('packages'));
        }
        else{
            return view('modules.others.package.noDisp');
        }
    }
}
