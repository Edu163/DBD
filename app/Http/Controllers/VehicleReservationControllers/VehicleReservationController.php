<?php

namespace App\Http\Controllers\VehicleReservationControllers;

use App\Modules\VehicleReservation\VehicleReservation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class VehicleReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return VehicleReservation::all();
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
        $vehicleReservation = new VehicleReservation();
        $vehicleReservation->monto_total = $request->input('monto_total');
        $vehicleReservation->fecha = Carbon::now();
        $vehicleReservation->save();
        if ($reservaVehiculo->exists()) {
          $response = ['success' => 'Creado con éxito!'];
        } else {
          $response = ['error' => 'No se ha podido crear!'];
        }
        return view('Congrats');
         //return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VehicleReservation  $vehicleReservation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return VehicleReservation::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VehicleReservation  $vehicleReservation
     * @return \Illuminate\Http\Response
     */
    public function edit(VehicleReservation $vehicleReservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VehicleReservation  $vehicleReservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vehicleReservation = VehicleReservation::find($id);
        $vehicleReservation->fill($this->validate($request, [
            'venta_id' => 'required',
            'fecha' => 'required',
            'monto_total' => 'required',
        ]))->save();

        return "Me he acutalizado correctamente! :D!";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VehicleReservation  $vehicleReservation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicleReservation = VehicleReservation::find($id);
        $vehicleReservation->delete();
        return back();
    }
}
