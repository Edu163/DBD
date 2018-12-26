<?php

namespace App\Http\Controllers\ReservaVueloControllers;

use App\Modulos\ReservaVuelo\DetalleVentaVuelo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetalleVentaVueloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return DetalleVentaVuelo::all();
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
        //
        $asiento = DetalleVentaVuelo::create($this->validate($request, [
            'id_venta' => 'required',
            'precio' => 'required',
            'descuento' => 'required',
            'monto_total' => 'required',
            'fecha' => 'required',
            'tipo' => 'required',
            'cantidad' => 'required'
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
     * @param  \App\Modulos\ReservaVuelo\DetalleVentaVuelo  $detalleVentaVuelo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return DetalleVentaVuelo::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaVuelo\DetalleVentaVuelo  $detalleVentaVuelo
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleVentaVuelo $detalleVentaVuelo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaVuelo\DetalleVentaVuelo  $detalleVentaVuelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleVentaVuelo $detalleVentaVuelo)
    {
        //
        $outcome = $detalleVentaVuelo->fill($this->validate($request, [
            'id_venta' => 'required',
            'precio' => 'required',
            'descuento' => 'required',
            'monto_total' => 'required',
            'fecha' => 'required',
            'tipo' => 'required',
            'cantidad' => 'required'
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
     * @param  \App\Modulos\ReservaVuelo\DetalleVentaVuelo  $detalleVentaVuelo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $detalleVentaVuelo = DetalleVentaVuelo::findOrFail($id);
        $detalleVentaVuelo->delete();
        return "eliminado";
    }
}
