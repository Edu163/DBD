<?php

namespace App\Http\Controllers\ReservaAlojamientoControllers;

use App\Modulos\ReservaAlojamiento\ReservaHotel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
         /*$reservaHotelData = $this->validate($request, [
            'precio' => 'required',
            'cantidad' => 'required',
            'monto_total' => 'required',
            'descuento' => 'required',
        ]);*/
        $reservaHotel = new ReservaHotel();
        $reservaHotel->precio = $request->input('precio');
        $reservaHotel->cantidad = $request->input('cantidad');
        $reservaHotel->monto_total = $request->input('monto_total');
        $reservaHotel->descuento = $request->input('descuento');
        $reservaHotel->fecha = Carbon::now();
        //$reservaHotel = ReservaHotel::create($reservaHotelData);
        $reservaHotel->save();
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
    public function show($id)
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
    public function update(Request $request, $id)
    {
        $reservaHotel = $ReservaHotel::find($id);
        $reservaHotel->fill($this->validate($request, [
            'id_venta' => 'required',
            'precio' => 'required',
            'fecha' => 'required',
            'cantidad' => 'required',
            'monto_total' => 'required',
            'descuento' => 'required',
        ]))->save();
        
            return 'Actualizado con éxito!';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modulos\ReservaAlojamiento\ReservaHotel  $reservaHotel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $reservaHotel = ReservaHotel::findOrFail($id);
        $reservaHotel->delete();
        return "eliminado";
    }
}
