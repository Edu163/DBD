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
        //$alojamientoPrivados = AlojamientoPrivado::all();
        //return $alojamientoPrivados;
        //return view('modulos.ReservaAlojamiento.alojamientoPrivado.index', compact('alojamientoPrivados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('modulos.ReservaAlojamiento.alojamientoPrivado.create');
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

        //return redirect('/alojamientoPrivados')->with($response);
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
        /*if ($alojamientoPrivado->exists()) {
            //return view('modulos.ReservaAlojamiento.alojamientoPrivado.show', compact('alojamientoPrivado'));
        } else {
            $response = ['error' => 'No existe la id solicitada'];
            //return redirect('/alojamientoPrivados')->with($response);
        }*/
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
    public function update(Request $request, AlojamientoPrivado $alojamientoPrivado)
    {
        $this->validate($request, [
            'id_calendario_alojamiento' => 'required',
            'capacidad' => 'required',
            'direccion' => 'required',
            'nombre' => 'required',
            'estrella' => 'required',
            'valoracion' => 'required',
            'pais' => 'required',
        ]);

        $alojamientoPrivados->id_calendario_alojamiento = $request->get('id_calendario_alojamiento');
        $alojamientoPrivados->capacidad = $request->get('capacidad');
        $alojamientoPrivados->direccion = $request->get('direccion');
        $alojamientoPrivados->nombre = $request->get('nombre');
        $alojamientoPrivados->estrella = $request->get('estrella');
        $alojamientoPrivados->valoracion = $request->get('valoracion');
        $alojamientoPrivados->pais = $request->get('pais');
        

        $dataUpdate = $alojamientoPrivados->save();

        if ($dataUpdate) 
        {
            $response = ['success' => 'Actualizado con éxito!'];
        } 
        else 
        {
            $response = ['error' => 'Ha ocurrido un error en la Base de Datos al actualizar!'];
        }
        return $response;
        //return redirect('/alojamientoPrivados/'.$alojamientoPrivado->id.'/edit')->with($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modulos\ReservaAlojamiento\AlojamientoPrivado  $alojamientoPrivado
     * @return \Illuminate\Http\Response
     */
    public function destroy(AlojamientoPrivado $alojamientoPrivado)
    {
        /*$response = [];
        try {
          $alojamientoPrivado->delete();
          $response = ['success' => 'Eliminado con éxito!'];
        } catch (\Exception $e) {
          $response = ['error' => 'Error al eliminar el registro!'];
        }
        return $response;
        //return redirect('/alojamientoPrivados')->with($response);
    }*/
    
}
