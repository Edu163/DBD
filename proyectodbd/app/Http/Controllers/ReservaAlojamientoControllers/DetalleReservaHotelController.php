<?php

namespace App\Http\Controllers\ReservaAlojamientoControllers;

use App\Modulos\ReservaAlojamiento\DetalleReservaHotel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetalleReservaHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DetalleReservaHotel::all();
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
        $detalleReservaHotelData = $this->validate($request, [
            'id_reserva_hotel' => 'required',
            'id_habitacion_hotel' => 'required',
            'id_alojamiento_privado' => 'required',
            'fecha_ingreso' => 'required',
            'fecha_egreso' => 'required',
            'precio' => 'required',
            'tipo' => 'required',
        ]);

        $detalleReservaHotel = DetalleReservaHotel::create($detalleReservaHotelData);

        if ($detalleReservaHotel->exists()) {
          $response = ['success' => 'Creado con éxito!'];
        } else {
          $response = ['error' => 'No se ha podido crear!'];
        }

         return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaAlojamiento\DetalleReservaHotel  $detalleReservaHotel
     * @return \Illuminate\Http\Response
     */
    public function show(DetalleReservaHotel $id)
    {
       return DetalleReservaHotel::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaAlojamiento\DetalleReservaHotel  $detalleReservaHotel
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleReservaHotel $detalleReservaHotel)
    {
        if ($detalleReservaHotel->exists()) {
            return view('modulos.ReservaAlojamiento.detalleReservaHotel.edit', compact('detalleReservaHotel'));
        } else {
            $response = ['error' => 'No es posible editar una id que no existe'];
            return redirect('/detalleReservaHotels')->with($response);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaAlojamiento\DetalleReservaHotel  $detalleReservaHotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleReservaHotel $detalleReservaHotel)
    {
        $this->validate($request, [
            'id_reserva_hotel' => 'required',
            'id_habitacion_hotel' => 'required',
            'id_alojamiento_privado' => 'required',
            'fecha_ingreso' => 'required',
            'fecha_egreso' => 'required',
            'precio' => 'required',
            'tipo' => 'required',
        ]);

        $detalleReservaHotels->id_reserva_hotel = $request->get('id_reserva_hotel');
        $detalleReservaHotels->id_habitacion_hotel = $request->get('id_habitacion_hotel');
        $detalleReservaHotels->id_alojamiento_privado = $request->get('id_alojamiento_privado');
        $detalleReservaHotels->fecha_ingreso = $request->get('fecha_ingreso');
        $detalleReservaHotels->fecha_egreso = $request->get('fecha_egreso');
        $detalleReservaHotels->precio = $request->get('precio');
        $detalleReservaHotels->tipo = $request->get('tipo');


        $dataUpdate = $detalleReservaHotels->save();

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
     * @param  \App\Modulos\ReservaAlojamiento\DetalleReservaHotel  $detalleReservaHotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetalleReservaHotel $id)
    {
        $detalleReservaHotel = DetalleReservaHotel::findOrFail($id);
        $detalleReservaHotel->delete();
        return "eliminado";
    }
}
