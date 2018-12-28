<?php

namespace App\Http\Controllers\ReservaAlojamientoControllers;

use App\Modulos\ReservaAlojamiento\AlojamientoPrivado;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlojamientoPrivadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AlojamientoPrivado::all();
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
         $alojamientoPrivadoData = $this->validate($request, [
            'id_calendario_alojamiento' => 'required',
            'capacidad' => 'required',
            'direccion' => 'required',
            'nombre' => 'required',
            'estrella' => 'required',
            'valoracion' => 'required',
            'pais' => 'required',
        ]);

        $alojamientoPrivado = AlojamientoPrivado::create($alojamientoPrivadoData);

        if ($alojamientoPrivado->exists()) {
          $response = ['success' => 'Creado con éxito!'];
        } else {
          $response = ['error' => 'No se ha podido crear!'];
        }

        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaAlojamiento\AlojamientoPrivado  $alojamientoPrivado
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return AlojamientoPrivado::findOrFail($id);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaAlojamiento\AlojamientoPrivado  $alojamientoPrivado
     * @return \Illuminate\Http\Response
     */
    /*public function edit(AlojamientoPrivado $alojamientoPrivado)
    {
        if ($alojamientoPrivado->exists()) {
            return view('modulos.ReservaAlojamiento.alojamientoPrivado.edit', compact('alojamientoPrivado'));
        } else {
            $response = ['error' => 'No es posible editar una id que no existe'];
            return redirect('/alojamientoPrivados')->with($response);
        }
    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaAlojamiento\AlojamientoPrivado  $alojamientoPrivado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alojamientoPrivado = AlojamientoPrivado::find($id);
        $alojamientoPrivado->fill($this->validate($request, [
            'id_calendario_alojamiento' => 'required',
            'capacidad' => 'required',
            'direccion' => 'required',
            'nombre' => 'required',
            'estrella' => 'required',
            'valoracion' => 'required',
            'pais' => 'required',
        ]))->save();
        
        return 'Actualizado con éxito!';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modulos\ReservaAlojamiento\AlojamientoPrivado  $alojamientoPrivado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alojamientoPrivado = AlojamientoPrivado::findOrFail($id);
        $alojamientoPrivado->delete();
        return "eliminado";
    }
    
}
