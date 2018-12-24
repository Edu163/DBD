<?php

namespace App\Http\Controllers\ReservaVueloControllers;

use App\Modulos\ReservaVuelo\OrigenDestino;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrigenDestinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return OrigenDestino::all();
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
        $origendestino = OrigenDestino::create($this->validate($request, [
            'id_detalle_vuelo' => 'required',
            'id_aeropuerto' => 'required'
        ]));

        if ($origendestino->exists()) {
            $response = ['success' => 'Creado con éxito!'];
        } else {
            $response = ['error' => 'No se ha podido crear!'];
        }
        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaVuelo\OrigenDestino  $origenDestino
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return OrigenDestino::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaVuelo\OrigenDestino  $origenDestino
     * @return \Illuminate\Http\Response
     */
    public function edit(OrigenDestino $origenDestino)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaVuelo\OrigenDestino  $origenDestino
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrigenDestino $origenDestino)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modulos\ReservaVuelo\OrigenDestino  $origenDestino
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $OrigenDestino = OrigenDestino::findOrFail($id);
        $OrigenDestino->delete();
        return "lo eliminé";
    }
}
