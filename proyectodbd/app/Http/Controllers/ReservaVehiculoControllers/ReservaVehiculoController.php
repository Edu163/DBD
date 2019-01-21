<?php

namespace App\Http\Controllers\ReservaVehiculoControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservaVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ReservaVehiculo::all();
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
        return ReservaVehiculo::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaVehiculo\ReservaVehiculo  $reservaVehiculo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ReservaVehiculo::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaVehiculo\ReservaVehiculo  $reservaVehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(ReservaVehiculo $reservaVehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaVehiculo\ReservaVehiculo  $reservaVehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reservaVehiculo = ReservaVehiculo::find($id);
        $reservaVehiculo->fill($this->validate($request, [
            'venta_id' => 'required',
            'fecha' => 'required',
            'monto_total' => 'required',
        ]))->save();

        return "Me he acutalizado correctamente! :D!";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modulos\ReservaVehiculo\ReservaVehiculo  $reservaVehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservaVehiculo = ReservaVehiculo::find($id);
        $reservaVehiculo->delete();
        return "lo eliminé";
    }
}
