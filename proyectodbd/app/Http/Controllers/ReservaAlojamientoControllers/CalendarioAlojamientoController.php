<?php

namespace App\Http\Controllers\ReservaAlojamientoControllers;

use App\Modulos\ReservaAlojamiento\CalendarioAlojamiento;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalendarioAlojamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CalendarioAlojamiento::all();
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
         $calendarioAlojamientoData = $this->validate($request, [
            'año' => 'required',
            'mes' => 'required',
            'dia' => 'required',
        ]);

        $calendarioAlojamiento = CalendarioAlojamiento::create($calendarioAlojamientoData);

        if ($calendarioAlojamiento->exists()) {
          $response = ['success' => 'Creado con éxito!'];
        } else {
          $response = ['error' => 'No se ha podido crear!'];
        }

         return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaAlojamiento\CalendarioAlojamiento  $calendarioAlojamiento
     * @return \Illuminate\Http\Response
     */
    public function show(CalendarioAlojamiento $id)
    {
        return CalendarioAlojamiento::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaAlojamiento\CalendarioAlojamiento  $calendarioAlojamiento
     * @return \Illuminate\Http\Response
     */
    public function edit(CalendarioAlojamiento $calendarioAlojamiento)
    {
         if ($calendarioAlojamiento->exists()) {
            return view('modulos.ReservaAlojamiento.calendarioAlojamiento.edit', compact('calendarioAlojamiento'));
        } else {
            $response = ['error' => 'No es posible editar una id que no existe'];
            return redirect('/calendarioAlojamientos')->with($response);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaAlojamiento\CalendarioAlojamiento  $calendarioAlojamiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CalendarioAlojamiento $calendarioAlojamiento)
    {
        $this->validate($request, [
            'año' => 'required',
            'mes' => 'required',
            'dia' => 'required',
        ]);

        $calendarioAlojamientos->año = $request->get('año');
        $calendarioAlojamientos->mes = $request->get('mes');
        $calendarioAlojamientos->dia = $request->get('dia');
       

        $dataUpdate = $calendarioAlojamientos->save();

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
     * @param  \App\Modulos\ReservaAlojamiento\CalendarioAlojamiento  $calendarioAlojamiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(CalendarioAlojamiento $id)
    {
        $calendarioAlojamiento = CalendarioAlojamiento::findOrFail($id);
        $calendarioAlojamiento->delete();
        return "eliminado";
    }
}
