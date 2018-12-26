<?php

namespace App\Http\Controllers\ReservaAutoControllers;

use App\Modulos\ReservaAuto\ServicioDeVehiculo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicioDeVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ServicioDeVehiculo::all();
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
        return ServicioDeVehiculo::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaAuto\ServicioDeVehiculo  $servicioDeVehiculo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ServicioDeVehiculo::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaAuto\ServicioDeVehiculo  $servicioDeVehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(ServicioDeVehiculo $servicioDeVehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaAuto\ServicioDeVehiculo  $servicioDeVehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $servicioDeVehiculo = ServicioDeVehiculo::find($id);
        $servicioDeVehiculo->fill($this->validate($request, [
            'nombre_servicio' => 'required',
            'duracion' => 'required',
        ]))->save();

        return "Me he acutalizado correctamente! :D!";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modulos\ReservaAuto\ServicioDeVehiculo  $servicioDeVehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicioDeVehiculo = ServicioDeVehiculo::find($id);
        $servicioDeVehiculo->delete();
        return "lo eliminé";
    }
}
