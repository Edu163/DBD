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
        $habitacionServicios = HabitacionServicio::all();
        return view('modulos.ReservaAlojamiento.habitacionServicio.index', compact('habitacionServicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modulos.ReservaAlojamiento.habitacionServicio.create');
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
            'id_servicio_alojamiento' => 'required',
            'id_habitacion_hotel' => 'required',
        ]);

        $habitacionServicio = HabitacionServicio::create($habitacionServicioData);

        if ($habitacionServicio->exists()) {
          $response = ['success' => 'Creado con éxito!'];
        } else {
          $response = ['error' => 'No se ha podido crear!'];
        }

        return redirect('/habitacionServicios')->with($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaAlojamiento\HabitacionServicio  $habitacionServicio
     * @return \Illuminate\Http\Response
     */
    public function show(HabitacionServicio $habitacionServicio)
    {
        if ($habitacionServicio->exists()) {
            return view('modulos.ReservaAlojamiento.habitacionServicio.show', compact('habitacionServicio'));
        } else {
            $response = ['error' => 'No existe la id solicitada'];
            return redirect('/habitacionServicios')->with($response);
        }
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
    public function update(Request $request, HabitacionServicio $habitacionServicio)
    {
         $this->validate($request, [
            'id_servicio_alojamiento' => 'required',
            'id_habitacion_hotel' => 'required',
        ]);

        $habitacionServicios->id_servicio_alojamiento = $request->get('id_servicio_alojamiento');
        $habitacionServicios->id_habitacion_hotel = $request->get('id_habitacion_hotel');
        

        $dataUpdate = $habitacionServicios->save();

        if ($dataUpdate) 
        {
            $response = ['success' => 'Actualizado con éxito!'];
        } 
        else 
        {
            $response = ['error' => 'Ha ocurrido un error en la Base de Datos al actualizar!'];
        }

        return redirect('/habitacionServicios/'.$habitacionServicio->id.'/edit')->with($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modulos\ReservaAlojamiento\HabitacionServicio  $habitacionServicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(HabitacionServicio $habitacionServicio)
    {
         $response = [];
        try {
          $habitacionServicio->delete();
          $response = ['success' => 'Eliminado con éxito!'];
        } catch (\Exception $e) {
          $response = ['error' => 'Error al eliminar el registro!'];
        }

        return redirect('/habitacionServicios')->with($response);
    }
}
