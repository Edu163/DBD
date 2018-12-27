<?php

namespace App\Http\Controllers\ReservaAutoControllers;

use App\Modulos\ReservaAuto\Automovil;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AutomovilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Automovil::all();
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
        return Automovil::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaAuto\Automovil  $automovil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Automovil::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaAuto\Automovil  $automovil
     * @return \Illuminate\Http\Response
     */
    public function edit(Automovil $automovil)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaAuto\Automovil  $automovil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $automovil = Automovil::find($id);
        $automovil->fill($this->validate($request, [
            'id_calendario_vehiculo' => 'required',
            'id_proveedor' => 'required',
            'id_zona' => 'required',
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
     * @param  \App\Modulos\ReservaAuto\Automovil  $automovil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $automovil = Automovil::find($id);
        $automovil->delete();
        return "Me eliminé correctamente! :D!";
    }
}
