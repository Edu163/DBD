<?php

namespace App\Http\Controllers\ReservaAlojamientoControllers;

use App\Modulos\ReservaAlojamiento\HabitacionServicio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HabitacionServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return HabitacionServicio::all();
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
         $habitacionServicioData = $this->validate($request, [
            'servicio_alojamiento_id' => 'required',
            'habitacion_hotel_id' => 'required',
        ]);

        $habitacionServicio = HabitacionServicio::create($habitacionServicioData);

        if ($habitacionServicio->exists()) {
          $response = ['success' => 'Creado con éxito!'];
        } else {
          $response = ['error' => 'No se ha podido crear!'];
        }

        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaAlojamiento\HabitacionServicio  $habitacionServicio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return HabitacionServicio::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaAlojamiento\HabitacionServicio  $habitacionServicio
     * @return \Illuminate\Http\Response
     */
    public function edit(HabitacionServicio $habitacionServicio)
    {
         if ($habitacionServicio->exists()) {
            return view('modulos.ReservaAlojamiento.habitacionServicio.edit', compact('habitacionServicio'));
        } else {
            $response = ['error' => 'No es posible editar una id que no existe'];
            return redirect('/habitacionServicios')->with($response);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaAlojamiento\HabitacionServicio  $habitacionServicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $habitacionServicio = $HabitacionServicio::find($id);
        $habitacionServicio->fill($this->validate($request, [
            'servicio_alojamiento_id' => 'required',
            'habitacion_hotel_id' => 'required',
        ]))->save();
        
            return 'Actualizado con éxito!';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modulos\ReservaAlojamiento\HabitacionServicio  $habitacionServicio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $habitacionServicio = HabitacionServicio::findOrFail($id);
        $habitacionServicio->delete();
        return "eliminado";
    }
}
