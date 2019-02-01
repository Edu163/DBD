<?php

namespace App\Http\Controllers\FlightReservationControllers;

use App\Modules\FlightReservation\CheckIn;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CheckIn::all();
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
        return CheckIn::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaVuelo\CheckIn  $checkIn
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return CheckIn::findOrFail($id);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaVuelo\CheckIn  $checkIn
     * @return \Illuminate\Http\Response
     */
    public function edit(CheckIn $checkIn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaVuelo\CheckIn  $checkIn
     * @return \Illuminate\Http\Response
     */
public function update(Request $request, $id)
    {
        $checkIn = CheckIn::find($id);
        $checkIn->fill($this->validate($request, [
            'asiento_id' => 'required',
            'user_id' => 'required',
            'fecha' => 'required',
            'estado' => 'required'
          ]))->save();

        return "se ha actualizado";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modulos\ReservaVuelo\CheckIn  $checkIn
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $checkIn = CheckIn::findOrFail($id);
        $checkIn->delete();
        return "eliminado";
    }
}
