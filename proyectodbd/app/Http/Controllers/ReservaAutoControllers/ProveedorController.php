<?php

namespace App\Http\Controllers\ReservaAutoControllers;

use App\Modulos\ReservaAuto\Proveedor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Proveedor::all();
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
        return Proveedor::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaAuto\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Proveedor::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaAuto\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Proveedor $proveedor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaAuto\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proveedor = Proveedor::find($id);
        $proveedor->fill($this->validate($request, [
            'politica_combustible' => 'required',
            'documentacion_necesaria' => 'required',
            'franquicia_daños' => 'required',
            'calificacion' => 'required',
            'deposito_seguridad' => 'required',
            'kilometraje' => 'required',
        ]))->save();

        return "Me he acutalizado correctamente! :D!";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modulos\ReservaAuto\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedor = Proveedor::find($id);
        $proveedor->delete();
        return "lo eliminé";
    }
}
