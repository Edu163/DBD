<?php

namespace App\Http\Controllers\ReservaAlojamientoControllers;

use App\Modulos\ReservaAlojamiento\ReservaHotel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservaHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ReservaHotel::all();
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
         $reservaHotelData = $this->validate($request, [
            'id_venta' => 'required',
            'precio' => 'required',
            'fecha' => 'required',
            'cantidad' => 'required',
            'monto_total' => 'required',
            'descuento' => 'required',
        ]);

        $reservaHotel = ReservaHotel::create($reservaHotelData);

        if ($reservaHotel->exists()) {
          $response = ['success' => 'Creado con éxito!'];
        } else {
          $response = ['error' => 'No se ha podido crear!'];
        }

         return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaAlojamiento\ReservaHotel  $reservaHotel
     * @return \Illuminate\Http\Response
     */
    public function show(ReservaHotel $id)
    {
        return ReservaHotel::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaAlojamiento\ReservaHotel  $reservaHotel
     * @return \Illuminate\Http\Response
     */
    public function edit(ReservaHotel $reservaHotel)
    {
         if ($reservaHotel->exists()) {
            return view('modulos.ReservaAlojamiento.reservaHotel.edit', compact('reservaHotel'));
        } else {
            $response = ['error' => 'No es posible editar una id que no existe'];
            return redirect('/reservaHotels')->with($response);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaAlojamiento\ReservaHotel  $reservaHotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReservaHotel $reservaHotel)
    {
         $this->validate($request, [
            'id_venta' => 'required',
            'precio' => 'required',
            'fecha' => 'required',
            'cantidad' => 'required',
            'monto_total' => 'required',
            'descuento' => 'required',
        ]);

        $reservaHotels->id_venta = $request->get('id_venta');
        $reservaHotels->precio = $request->get('precio');
        $reservaHotels->fecha = $request->get('fecha');
        $reservaHotels->cantidad = $request->get('cantidad');
        $reservaHotels->monto_total = $request->get('monto_total');
        $reservaHotels->descuento = $request->get('descuento');
        

        $dataUpdate = $reservaHotels->save();

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
     * @param  \App\Modulos\ReservaAlojamiento\ReservaHotel  $reservaHotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReservaHotel $id)
    {
         $reservaHotel = ReservaHotel::findOrFail($id);
        $reservaHotel->delete();
        return "eliminado";
    }
}
