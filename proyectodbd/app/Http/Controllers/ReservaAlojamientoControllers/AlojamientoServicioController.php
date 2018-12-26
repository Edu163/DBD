<?php

namespace App\Http\Controllers\ReservaAlojamientoControllers;

use App\Modulos\ReservaAlojamiento\AlojamientoServicio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlojamientoServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alojamientoServicios = AlojamientoServicio::all();
        return view('modulos.ReservaAlojamiento.alojamientoServicio.index', compact('alojamientoServicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modulos.ReservaAlojamiento.alojamientoServicios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alojamientoServicioData = $this->validate($request, [
            'id_servicio_alojamiento' => 'required',
            'id_alojamiento_privado' => 'required',
        ]);

        $alojamientoServicio = AlojamientoServicio::create($alojamientoServicioData);

        if ($alojamientoServicio->exists()) {
          $response = ['success' => 'Creado con éxito!'];
        } else {
          $response = ['error' => 'No se ha podido crear!'];
        }

        return redirect('/alojamientoServicios')->with($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaAlojamiento\AlojamientoServicio  $alojamientoServicio
     * @return \Illuminate\Http\Response
     */
    public function show(AlojamientoServicio $alojamientoServicio)
    {
         if ($alojamientoServicio->exists()) {
            return view('modulos.ReservaAlojamiento.alojamientoServicio.show', compact('alojamientoServicio'));
        } else {
            $response = ['error' => 'No existe la id solicitada'];
            return redirect('/alojamientoServicios')->with($response);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaAlojamiento\AlojamientoServicio  $alojamientoServicio
     * @return \Illuminate\Http\Response
     */
    public function edit(AlojamientoServicio $alojamientoServicio)
    {
         if ($alojamientoServicio->exists()) {
            return view('modulos.ReservaAlojamiento.alojamientoServicio.edit', compact('alojamientoServicio'));
        } else {
            $response = ['error' => 'No es posible editar una id que no existe'];
            return redirect('/alojamientoServicios')->with($response);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaAlojamiento\AlojamientoServicio  $alojamientoServicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AlojamientoServicio $alojamientoServicio)
    {
         $this->validate($request, [
            'id_servicio_alojamiento' => 'required',
            'id_alojamiento_privado' => 'required',
        ]);

        $alojamientoServicios->id_servicio_alojamiento = $request->get('id_servicio_alojamiento');
        $alojamientoServicios->id_alojamiento_privado = $request->get('id_alojamiento_privado');
        

        $dataUpdate = $alojamientoServicios->save();

        if ($dataUpdate) 
        {
            $response = ['success' => 'Actualizado con éxito!'];
        } 
        else 
        {
            $response = ['error' => 'Ha ocurrido un error en la Base de Datos al actualizar!'];
        }

        return redirect('/alojamientoServicios/'.$alojamientoServicio->id.'/edit')->with($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modulos\ReservaAlojamiento\AlojamientoServicio  $alojamientoServicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(AlojamientoServicio $alojamientoServicio)
    {
        $response = [];
        try {
          $alojamientoServicio->delete();
          $response = ['success' => 'Eliminado con éxito!'];
        } catch (\Exception $e) {
          $response = ['error' => 'Error al eliminar el registro!'];
        }

        return redirect('/alojamientoServicios')->with($response);
    }
}
