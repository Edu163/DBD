<?php

namespace App\Http\Controllers\ReservaAutoControllers;

use App\Modulos\ReservaAuto\ServicioProveedor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicioProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ServicioProveedor::all();
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
        return ServicioProveedor::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaAuto\ServicioProveedor  $servicioProveedor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ServicioProveedor::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaAuto\ServicioProveedor  $servicioProveedor
     * @return \Illuminate\Http\Response
     */
    public function edit(ServicioProveedor $servicioProveedor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaAuto\ServicioProveedor  $servicioProveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $servicioProveedor = ServicioProveedor::find($id);
        $servicioProveedor->fill($this->validate($request, [
            'id_servicio' => 'required',
            'id_proveedor' => 'required',
        ]))->save();

        return "Me he acutalizado correctamente! :D!";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modulos\ReservaAuto\ServicioProveedor  $servicioProveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicioProveedor = ServicioProveedor::find($id);
        $servicioProveedor->delete();
        return "lo eliminé";
    }
}
