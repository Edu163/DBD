<?php

namespace App\Http\Controllers\ReservaVueloControllers;

use App\Modulos\ReservaVuelo\Vuelo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VueloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Vuelo::all();
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
        $vuelo = Vuelo::create($this->validate($request, [
            'detalle_venta_vuelo_id' => 'required',
            'precio' => 'required',
            'duracion_vuelo' => 'required'
        ]));

        if ($vuelo->exists()) {
            $response = ['success' => 'Creado con éxito!'];
        } else {
            $response = ['error' => 'No se ha podido crear!'];
        }
        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaVuelo\Vuelo  $vuelo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Vuelo::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaVuelo\Vuelo  $vuelo
     * @return \Illuminate\Http\Response
     */
    public function edit(Vuelo $vuelo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaVuelo\Vuelo  $vuelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vuelo $vuelo)
    {
        $outcome = $vuelo->fill($this->validate($request, [
            'detalle_venta_vuelo_id' => 'required',
            'precio' => 'required',
            'duracion_vuelo' => 'required'
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
     * @param  \App\Modulos\ReservaVuelo\Vuelo  $vuelo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vuelo = Vuelo::findOrFail($id);
        $vuelo->delete();
        return "eliminado";
    }
}
