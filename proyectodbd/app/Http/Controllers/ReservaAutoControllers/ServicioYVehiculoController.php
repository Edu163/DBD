<?php

namespace App\Http\Controllers\ReservaAutoControllers;

use App\Modulos\ReservaAuto\ServicioYVehiculo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicioYVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ServicioYVehiculo::all();
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
        return ServicioYVehiculo::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaAuto\ServicioYVehiculo  $servicioYVehiculo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ServicioYVehiculo::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaAuto\ServicioYVehiculo  $servicioYVehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(ServicioYVehiculo $servicioYVehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaAuto\ServicioYVehiculo  $servicioYVehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $servicioYVehiculo = ServicioYVehiculo::find($id);
        $servicioYVehiculo->fill($this->validate($request, [
            'id_servicio' => 'required',
            'patente' => 'required',
            'precio' => 'required',
        ]))->save();

        return "Me he acutalizado correctamente! :D!";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modulos\ReservaAuto\ServicioYVehiculo  $servicioYVehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicioYVehiculo = ServicioYVehiculo::find($id);
        $servicioYVehiculo->delete();
        return "lo eliminé";
    }
}
