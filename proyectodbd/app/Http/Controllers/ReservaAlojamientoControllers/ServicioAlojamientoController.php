<?php

namespace App\Http\Controllers\ReservaAlojamientoControllers;

use App\Modulos\ReservaAlojamiento\ServicioAlojamiento;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicioAlojamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ServicioAlojamiento::all();
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
         $servicioAlojamientoData = $this->validate($request, [
            'id_hotel' => 'required',
            'nombre' => 'required',
            'precio' => 'required',
            'descripcion' => 'required',
        ]);

        $servicioAlojamiento = ServicioAlojamiento::create($servicioAlojamientoData);

        if ($servicioAlojamiento->exists()) {
          $response = ['success' => 'Creado con éxito!'];
        } else {
          $response = ['error' => 'No se ha podido crear!'];
        }

        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaAlojamiento\ServicioAlojamiento  $servicioAlojamiento
     * @return \Illuminate\Http\Response
     */
    public function show(ServicioAlojamiento $id)
    {
        return ServicioAlojamiento::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaAlojamiento\ServicioAlojamiento  $servicioAlojamiento
     * @return \Illuminate\Http\Response
     */
    public function edit(ServicioAlojamiento $servicioAlojamiento)
    {
         if ($servicioAlojamiento->exists()) {
            return view('modulos.ReservaAlojamiento.servicioAlojamiento.edit', compact('servicioAlojamiento'));
        } else {
            $response = ['error' => 'No es posible editar una id que no existe'];
            return redirect('/servicioAlojamientos')->with($response);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaAlojamiento\ServicioAlojamiento  $servicioAlojamiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServicioAlojamiento $servicioAlojamiento)
    {
         $this->validate($request, [
            'id_hotel' => 'required',
            'nombre' => 'required',
            'precio' => 'required',
            'descripcion' => 'required',
        ]);

        $servicioAlojamientos->id_hotel = $request->get('id_hotel');
        $servicioAlojamientos->nombre = $request->get('nombre');
        $servicioAlojamientos->precio = $request->get('precio');
        $servicioAlojamientos->descripcion = $request->get('descripcion');
        

        $dataUpdate = $servicioAlojamientos->save();

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
     * @param  \App\Modulos\ReservaAlojamiento\ServicioAlojamiento  $servicioAlojamiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicioAlojamiento $id)
    {
         $servicioAlojamiento = ServicioAlojamiento::findOrFail($id);
        $servicioAlojamiento->delete();
        return "eliminado";
    }
}
