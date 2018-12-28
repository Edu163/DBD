<?php

namespace App\Http\Controllers\ReservaVueloControllers;

use App\Modulos\ReservaVuelo\DetalleVuelo;
use App\Modulos\ReservaVuelo\Aeropuerto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class DetalleVueloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return DetalleVuelo::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         //
         $detalleVuelo = DetalleVuelo::create($this->validate($request, [
            'id_avion' => 'required',
            'id_vuelo' => 'required',
            'id_origen' => 'required',
            'id_destino' => 'required',
            'precio' => 'required',
            'fecha_despegue' => 'required',
            'fecha_aterrizaje' => 'required',
        ]));

        if ($detalleVuelo->exists()) {
            $response = ['success' => 'Creado con éxito!'];
        } else {
            $response = ['error' => 'No se ha podido crear!'];
        }
        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaVuelo\DetalleVuelo  $detalleVuelo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return DetalleVuelo::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaVuelo\DetalleVuelo  $detalleVuelo
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleVuelo $detalleVuelo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaVuelo\DetalleVuelo  $detalleVuelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleVuelo $detalleVuelo)
    {
        //
        $outcome = $detalleVuelo->fill($this->validate($request, [
            'id_avion' => 'required',
            'id_vuelo' => 'required',
            'fecha_despegue' => 'required',
            'fecha_aterrizaje' => 'required',
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
     * @param  \App\Modulos\ReservaVuelo\DetalleVuelo  $detalleVuelo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $detalleVuelo = DetalleVuelo::findOrFail($id);
        $detalleVuelo->delete();
        return "eliminado";
    }
    public function origen($id)
    {

        $det_vuelos = DetalleVuelo::where('id_origen','=',$id)->get();
       //$asientos = $det_vuelos[0]->asiento()->get();
        //return $det_vuelos;
        /*$det_vuelos = DB::table('detalles_vuelos')
        ->where('id_destino', '=', $id)
        ->join('aeropuertos','aeropuertos.id','=','detalles_vuelos.id_destino')
        ->join('aviones','aviones.id','=','detalles_vuelos.id_avion')
        ->join('companias','companias.id','=','aviones.compania_id')
        ->select('aeropuertos.nombre as Destino','companias.nombre as Aerolinea', 'aviones.modelo as Avion')
        ->get();*/
        return $det_vuelos;
    }
    public function destino($id)
    {
        $det_vuelos = DetalleVuelo::where('id_destino','=',$id)->get();
        return $det_vuelos;
    }
}
