<?php

namespace App\Http\Controllers\ReservaVehiculoControllers;

use App\Modulos\ReservaVehiculo\CalendarioVehiculo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalendarioVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CalendarioVehiculo::all();
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
        return CalendarioVehiculo::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaVehiculo\CalendarioVehiculo  $calendarioVehiculo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return CalendarioVehiculo::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaVehiculo\CalendarioVehiculo  $calendarioVehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(CalendarioVehiculo $calendarioVehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaVehiculo\CalendarioVehiculo  $calendarioVehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $calendarioVehiculo = CalendarioVehiculo::find($id);
        $calendarioVehiculo->fill($this->validate($request, [
            'año' => 'required',
            'mes' => 'required',
            'dia' => 'required',
        ]))->save();

        return "Me he acutalizado correctamente! :D!";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modulos\ReservaVehiculo\CalendarioVehiculo  $calendarioVehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $calendarioVehiculo = CalendarioVehiculo::find($id);
        $calendarioVehiculo->delete();
        return "lo eliminé";
    }
}