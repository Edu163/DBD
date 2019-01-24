<?php

namespace App\Http\Controllers\ReservaVueloControllers;

use App\Modulos\ReservaVuelo\Avion;
use App\Modulos\ReservaVuelo\Compania;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AvionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aviones = Avion::All();
        return view('modulos.ReservaVuelo.aviones.index', compact('aviones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companias = Compania::All();
        return view('modulos.ReservaVuelo.aviones.create', compact('companias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $avion = Avion::create($this->validate($request, [
            'compania_id' => 'required',
            'modelo' => 'required',
        ]));

        if ($avion->exists()) {
            $response = ['success' => 'Creado con éxito!'];
            $avion->save();
        } else {
            $response = ['error' => 'No se ha podido crear!'];
        }
        $aviones = Avion::All();
        return view('modulos.ReservaVuelo.aviones.index', compact('aviones'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaVuelo\Avion  $avion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Avion::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaVuelo\Avion  $avion
     * @return \Illuminate\Http\Response
     */
    public function edit(Avion $avion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaVuelo\Avion  $avion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Avion $avion)
    {
        $outcome = $avion->fill($this->validate($request, [
            'compania_id' => 'required',
            'modelo' => 'required',
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
     * @param  \App\Modulos\ReservaVuelo\Avion  $avion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $avion = Avion::findOrFail($id);
        $avion->delete();
        return "eliminado";
    }
}
