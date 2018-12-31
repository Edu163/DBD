<?php

namespace App\Http\Controllers\ReservaVueloControllers;

use App\Modulos\ReservaVuelo\Aeropuerto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AeropuertoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Aeropuerto::all();
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
        $asiento = Aeropuerto::create($this->validate($request, [
            'pais' => 'required',
            'ciudad' => 'required',
            'direccion' => 'required',
            'nombre' => 'required'
        ]));

        if ($asiento->exists()) {
            $response = ['success' => 'Creado con éxito!'];
        } else {
            $response = ['error' => 'No se ha podido crear!'];
        }
        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaVuelo\Aeropuerto  $aeropuerto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Aeropuerto::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaVuelo\Aeropuerto  $aeropuerto
     * @return \Illuminate\Http\Response
     */
    public function edit(Aeropuerto $aeropuerto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaVuelo\Aeropuerto  $aeropuerto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aeropuerto $aeropuerto)
    {
        $outcome = $aeropuerto->fill($this->validate($request, [
            'pais' => 'required',
            'ciudad' => 'required',
            'direccion' => 'required',
            'nombre' => 'required'
          ]))->save();
      
          if ($outcome) {
            $response = ['success' => 'Actualizado con éxito!'];
          } else {
            $response = ['error' => 'Ha ocurrido un error en la Base de Datos al actualizar!'];
          }
      
          return "se ha actualizado";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modulos\ReservaVuelo\Aeropuerto  $aeropuerto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aeropuerto = Aeropuerto::findOrFail($id);
        $aeropuerto->delete();
        return "eliminado";
    }
}
