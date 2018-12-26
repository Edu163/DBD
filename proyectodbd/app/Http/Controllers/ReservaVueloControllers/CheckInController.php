<?php

namespace App\Http\Controllers\ReservaVueloControllers;

use App\Modulos\ReservaVuelo\CheckIn;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return CheckIn::all();
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
        $checkin = CheckIn::create($this->validate($request, [
            'id_asiento' => 'required',
            'id_user' => 'required',
            'fecha' => 'required',
            'estado' => 'required'
        ]));

        if ($checkin->exists()) {
            $response = ['success' => 'Creado con éxito!'];
        } else {
            $response = ['error' => 'No se ha podido crear!'];
        }
        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaVuelo\CheckIn  $checkIn
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return CheckIn::findOrFail($id);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaVuelo\CheckIn  $checkIn
     * @return \Illuminate\Http\Response
     */
    public function edit(CheckIn $checkIn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaVuelo\CheckIn  $checkIn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CheckIn $checkIn)
    {
        //
        $outcome = $checkIn->fill($this->validate($request, [
            'id_asiento' => 'required',
            'id_user' => 'required',
            'fecha' => 'required',
            'estado' => 'required'
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
     * @param  \App\Modulos\ReservaVuelo\CheckIn  $checkIn
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $checkIn = CheckIn::findOrFail($id);
        $checkIn->delete();
        return "eliminado";
    }
}
