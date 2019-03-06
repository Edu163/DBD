<?php

namespace App\Http\Controllers\FlightReservationControllers;

use App\Modules\FlightReservation\Flight;
use App\Http\Controllers\Controller;
use App\Modules\FlightReservation\FlightDetail;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index()
    {
        //if ( ! session('vuelo_vuelta')) {
            $params = $this->validate(request(), [
                'origen' => 'required|integer',
                'destino' => 'required|integer',
                'fechaida' => 'required|date',
                //'fechavuelta' => 'required',//_if:tipo_vuelo,1|nullable',
                'pasajeros' => 'required|integer',
                //'pasajeros_ninos' => 'required|integer',
                'cabina' => 'required|integer|between:1,3',
                //'cabina' => 'required',
            ]);
        //} else {
            //$params = request()->session()->get('busqueda.vuelos');
            //request()->session()->forget('vuelo_vuelta');
        //}
        $flight = Flight::buscarVuelos($params);
        request()->session()->put('busqueda.vuelos', $params);
        $cabina = $params['cabina'];
        //return view('modules.flightReservation.flight.flight', compact('vuelos'));
         if(count($flight)>0)
        {
            return view('modules.flightReservation.flight.flight', compact('flight', 'cabina'));
        }
        else{
            return view('modules.flightReservation.flightdetail.noDisp');
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
        Flight::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Flight::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function edit(Flight $flight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $flight = Flight::find($id);
        $flight->fill($this->validate($request, [
            'detalle_venta_vuelo_id' => 'required',
            'precio' => 'required',
            'duracion_vuelo' => 'required'
          ]))->save();
      
          return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flight = Flight::findOrFail($id);
        $flight->delete();
        return back();
    }
}
