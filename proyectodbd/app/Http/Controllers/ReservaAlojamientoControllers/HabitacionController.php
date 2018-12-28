<?php

namespace App\Http\Controllers\ReservaAlojamientoControllers;

use App\Modulos\ReservaAlojamiento\Habitacion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Habitacion::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $habitacionData = $this->validate($request, [
            'id_alojamiento_privado' => 'required',
            'piso' => 'required',
            'numero' => 'required',
            'camas' => 'required',
        ]);

        $habitacion = Habitacion::create($habitacionData);

        if ($habitacion->exists()) {
          $response = ['success' => 'Creado con éxito!'];
        } else {
          $response = ['error' => 'No se ha podido crear!'];
        }

         return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaAlojamiento\Habitacion  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function show(Habitacion $id)
    {
        return Habitacion::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaAlojamiento\Habitacion  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Habitacion $habitacion)
    {
         if ($habitacion->exists()) {
            return view('modulos.ReservaAlojamiento.habitacion.edit', compact('habitacion'));
        } else {
            $response = ['error' => 'No es posible editar una id que no existe'];
            return redirect('/habitacions')->with($response);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaAlojamiento\Habitacion  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Habitacion $habitacion)
    {
         $this->validate($request, [
            'id_alojamiento_privado' => 'required',
            'piso' => 'required',
            'numero' => 'required',
            'camas' => 'required',
        ]);

        $habitacions->id_calendario_alojamiento = $request->get('id_calendario_alojamiento');
        $habitacions->capacidad = $request->get('capacidad');
        $habitacions->direccion = $request->get('direccion');
        $habitacions->nombre = $request->get('nombre');
        $habitacions->estrella = $request->get('estrella');
        $habitacions->valoracion = $request->get('valoracion');
        $habitacions->pais = $request->get('pais');
        

        $dataUpdate = $habitacions->save();

        if ($dataUpdate) 
        {
            $response = ['success' => 'Actualizado con éxito!'];
        } 
        else 
        {
            $response = ['error' => 'Ha ocurrido un error en la Base de Datos al actualizar!'];
        }

         return $response;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modulos\ReservaAlojamiento\Habitacion  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Habitacion $id)
    {
         $habitacion = Habitacion::findOrFail($id);
        $habitacion->delete();
        return "eliminado";
    }
}
