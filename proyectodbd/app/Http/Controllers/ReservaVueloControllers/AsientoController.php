<?php

namespace App\Http\Controllers\ReservaVueloControllers;

use App\Modulos\ReservaVuelo\Asiento;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AsientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Asiento::all();
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
        $asiento = Asiento::create($this->validate($request, [
            'avion_id'=> 'required',
            'numero' => 'required',
            'letra' => 'required',
            'tipo' => 'required',
            'clase' => 'required',
            'disponible' => 'required',
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
     * @param  \App\Modulos\ReservaVuelo\Asiento  $asiento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Asiento::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaVuelo\Asiento  $asiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Asiento $asiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaVuelo\Asiento  $asiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asiento $asiento)
    {
        $outcome = $asiento->fill($this->validate($request, [
            'avion_id'=> 'required',
            'numero' => 'required',
            'letra' => 'required',
            'tipo' => 'required',
            'clase' => 'required',
            'disponible' => 'required',
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
     * @param  \App\Modulos\ReservaVuelo\Asiento  $asiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asiento $asiento)
    {
        $asiento = Asiento::findOrFail($id);
        $asiento->delete();
        return "eliminado";
    }
}
