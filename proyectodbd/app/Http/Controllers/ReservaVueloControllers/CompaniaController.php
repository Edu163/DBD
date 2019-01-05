<?php

namespace App\Http\Controllers\ReservaVueloControllers;

use App\Modulos\ReservaVuelo\Compania;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompaniaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companias = Compania::all();

        return view('modulos.ReservaVuelo.companias.index', compact('companias'));
    }
    /*public function index()
    {
        return Compania::all();
    }
    */
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modulos.ReservaVuelo.companias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*public function store(Request $request)
    {
        $compania = new Compania();
        $compania->nombre = $request->input('nombre');
        $compania->direccion = $request->input('direccion');
        $compania->save();
        return 'Guardado';
    }*/
    public function store(Request $request)
    {
        return Compania::create($request->all());
        return $compania;
        
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaVuelo\Compania  $compania
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Compania::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaVuelo\Compania  $compania
     * @return \Illuminate\Http\Response
     */
    public function edit(Compania $compania)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaVuelo\Compania  $compania
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compania $compania)
    {
        $outcome = $compania->fill($this->validate($request, [
            'nombre' => 'required',
            'direccion' => 'required'
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
     * @param  \App\Modulos\ReservaVuelo\Compania  $compania
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $compania = Compania::find($id);
        $aviones = $compania->avion();
        foreach ($aviones as $avion) {
            # code...
            $avion->delete();
        }
        $compania->delete();
        return "eliminado";
        

    }
}
