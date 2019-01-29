<?php

namespace App\Http\Controllers\VehicleReservationControllers;

use App\Modules\VehicleReservation\Vehicle;
use App\Modules\VehicleReservation\Zone;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zones = Zone::all();
        foreach($zones as $zone)
        {
        $vehicles = Vehicle::all()->where($zona->id, '=', request('zona_id'));
        }

        return view('modules.vehicleReservation.vehicle.index', compact('vehicles'));
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
        return Vehicle::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Vehicle::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->fill($this->validate($request, [
            'calendario_vehiculo_id' => 'required',
            'proveedor_id' => 'required',
            'zona_id' => 'required',
            'marca' => 'required',
            'tipo' => 'required',
            'gamma' => 'required',
            'transmision' => 'required',
            'combustible' => 'required',
            'n_pasajeros' => 'required',
            'equipaje_g' => 'required',
            'equipaje_p' => 'required',
            'n_puertas' => 'required',
            'n_kilometraje' => 'required',
            'precio_hora' => 'required',
            'aire_acondicionado' => 'required',
        ]))->save();

        return "Me he acutalizado correctamente! :D!";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->delete();
        return "Me eliminé correctamente! :D!";
    }
}
