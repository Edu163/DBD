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
        return AlojamientoServicio::all();
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

         return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaAlojamiento\AlojamientoServicio  $alojamientoServicio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return AlojamientoServicio::findOrFail($id);
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
    public function update(Request $request, $id)
    {
        $alojamientoServicio = $AlojamientoServicio::find($id);
        $alojamientoServicio->fill($this->validate($request, [
            'id_servicio_alojamiento' => 'required',
            'id_alojamiento_privado' => 'required',
        ]))->save();
        
            return 'Actualizado con éxito!';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modulos\ReservaAlojamiento\AlojamientoServicio  $alojamientoServicio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $alojamientoServicio = AlojamientoServicio::findOrFail($id);
        $alojamientoServicio->delete();
        return "eliminado";
    }
}