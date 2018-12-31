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
            'reserva_hotel_id' => 'required',
            'habitacion_hotel_id' => 'required',
            'alojamiento_privado_id' => 'required',
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
    public function show($id)
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
    public function update(Request $request, $id)
    {
        $detalleReservaHotel = $DetalleReservaHotel::find($id);
        $detalleReservaHotel->fill($this->validate($request, [
            'reserva_hotel_id' => 'required',
            'habitacion_hotel_id' => 'required',
            'alojamiento_privado_id' => 'required',
            'fecha_ingreso' => 'required',
            'fecha_egreso' => 'required',
            'precio' => 'required',
            'tipo' => 'required',
        ]))->save();
        
            return 'Actualizado con éxito!';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modulos\ReservaAlojamiento\DetalleReservaHotel  $detalleReservaHotel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalleReservaHotel = DetalleReservaHotel::findOrFail($id);
        $detalleReservaHotel->delete();
        return "eliminado";
    }
}
