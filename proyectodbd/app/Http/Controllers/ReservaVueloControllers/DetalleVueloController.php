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
        //
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
        //
         //
         $detalleVuelo = DetalleVuelo::create($this->validate($request, [
            'id_avion' => 'required',
            'id_vuelo' => 'required',
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modulos\ReservaVuelo\DetalleVuelo  $detalleVuelo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $detalleVuelo = DetalleVuelo::findOrFail($id);
        $detalleVuelo->delete();
        return "lo eliminé";
    }
}
