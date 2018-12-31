<?php

namespace App\Http\Controllers\ReservaVueloControllers;

use App\Modulos\ReservaVuelo\DetalleVuelo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetalleVueloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DetalleVuelo::all();
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
         $detalleVuelo = DetalleVuelo::create($this->validate($request, [
            'avion_id' => 'required',
            'vuelo_id' => 'required',
            'fecha_despegue' => 'required',
            'fecha_aterrizaje' => 'required',
        ]));

        if ($detalleVuelo->exists()) {
            $response = ['success' => 'Creado con éxito!'];
        } else {
            $response = ['error' => 'No se ha podido crear!'];
        }
        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaVuelo\DetalleVuelo  $detalleVuelo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return DetalleVuelo::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaVuelo\DetalleVuelo  $detalleVuelo
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleVuelo $detalleVuelo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaVuelo\DetalleVuelo  $detalleVuelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleVuelo $detalleVuelo)
    {
        $outcome = $detalleVuelo->fill($this->validate($request, [
            'avion_id' => 'required',
            'vuelo_id' => 'required',
            'fecha_despegue' => 'required',
            'fecha_aterrizaje' => 'required',
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
     * @param  \App\Modulos\ReservaVuelo\DetalleVuelo  $detalleVuelo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalleVuelo = DetalleVuelo::findOrFail($id);
        $detalleVuelo->delete();
        return "eliminado";
    }
}
