<?php

namespace App\Http\Controllers\OthersControllers;

use App\Modules\Others\Package;
use App\Modules\HousingReservation\Hotel;
use App\Modules\HousingReservation\HotelRoom;
use App\Modules\FlightReservation\FlightDetail;
use App\Modules\FlightReservation\RoundtripFlight;
use App\Modules\VehicleReservation\Vehicle;
use App\Modules\VehicleReservation\Zone;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $hotels = Hotel::all()->where('pais', request('zona_id'));
        // $packages = Package::all()->where('pais', request('zona_id'));
        
        // if(count($packages)>0)
        // {
        //     return view('modules.others.package.index', compact('packages'));
        // }
        // else{
        //     return view('modules.others.package.noDisp');
        // }
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
        //dd(":D");
        $params = $this->validate(request(), [
                'origen-packageOne' => 'required|integer',
                'destino-packageOne' => 'required|integer',
                'fecha-ida-packageOne' => 'required|date',
                'fecha-vuelta-packageOne' => 'required|date',
                'pasajeros' => 'required|integer',
                'cabina' => 'required|integer|between:1,3',
            ]);
        //dd($params);
        $parametrosVuelo = [
            'origen' => $params['origen-packageOne'],
            'destino' => $params['destino-packageOne'],
            'fechaida2' => $params['fecha-ida-packageOne'],
            'fechavuelta' => $params['fecha-vuelta-packageOne'],
            'pasajeros' => $params['pasajeros'],
            'cabina' => $params['cabina'],
        ];
        $packages = [];
        $hotels = Hotel::where('ciudad_id','=', $params['destino-packageOne'])->get();
        //dump($hotels);
        $roundtrips = RoundtripFlight::buscarVuelosIdaVuelta($parametrosVuelo);
        $habitaciones = [];
        //dd($roundtrips);
        foreach($roundtrips as $roundtrip)
        {
            //$fechaEntrada1 = 
            $fechaEntrada1 = $roundtrip->vueloIda->fecha_aterrizaje;
            //dump($fechaEntrada1);
            $fechaEntrada2 = Carbon::createFromFormat('Y-m-d H:i:s', $fechaEntrada1)->format('Y-m-d');
            
            //dump($fechaEntrada2);
            $parametrosHabitacion = [
                'fecha-entrada-housing' => $fechaEntrada2,
                'fecha-salida-housing' => $params['fecha-vuelta-packageOne'],
            ];
            foreach($hotels as $hotel)
            {
                $rooms = HotelRoom::buscarHabitacion($parametrosHabitacion, $hotel->id);
                foreach($rooms as $room)
                {
                    $habitaciones[] = $room;
                    $packages[] = Package::create([
                                    'roundtrip_id' => $roundtrip->id,
                                    'hotel_room_id'=> $room->id,
                                    'vehicle_id' => null,
                                    'type' => 1,
                                    'fecha_inicio' => $params['fecha-ida-packageOne'],
                                    'fecha_fin' => $params['fecha-vuelta-packageOne'],
                                    'precio' => (int)(($room->precio + $roundtrip->precio_economy) * 0.8),

                                 ]);
                }
            }
        }
        if(count($packages) > 9)
        {
            $packages = array_slice($packages, 0, 9);
            //$packages = $packages->inRandomOrder()->take(9)->get();
        }
        //dump($packages);
        //dump($packages);
        //dump($habitaciones);
        // $hotels = Hotel::all()->where('ciudad', request('destino-packageOne'));
        // $destino = request('destino-packageOne');
        // //dd($destino);
        // $array_id = [];
		// foreach($hotels as $hotel)
		// {
		// 	$array_id[] = $hotel->id;
        // }
        // //dd($array_id);
        // $packages = Package::all()->where('type', 1)
        //                           ->whereIn('hotel_id', $array_id);
        if(count($packages)>0)
        {
            return view('modules.others.package.indexva', compact('packages'));
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
