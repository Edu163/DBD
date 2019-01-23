<?php

namespace App\Http\Controllers\ReservaVehiculoControllers;

use App\Modulos\ReservaVehiculo\Vehiculo;
use App\Modulos\ReservaVehiculo\Zona;
use App\Modulos\ReservaVehiculo\DetalleReservaVehiculo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetalleReservaVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $zonas = Zona::where('id', request('zona_id'))->pluck('id');

        $vehiculos = Vehiculo::whereIn('zona_id', $zonas)
            ->get();

        return view('modulos.ReservaVehiculo.detallereserva.index', compact('vehiculos'));
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
        return DetalleReservaVehiculo::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaVehiculo\DetalleReservaVehiculo  $detalleReservaVehiculo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return DetalleReservaVehiculo::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaVehiculo\DetalleReservaVehiculo  $detalleReservaVehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleReservaVehiculo $detalleReservaVehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaVehiculo\DetalleReservaVehiculo  $detalleReservaVehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $detalleReservaVehiculo = DetalleReservaVehiculo::find($id);
        $detalleReservaVehiculo->fill($this->validate($request, [
            'id_reserva_vehiculo' => 'required',
            'patente' => 'required',
            'fecha_retiro' => 'required',
            'fecha_regreso' => 'required',
            'precio_reserva' => 'required',
            'descuento' => 'required',
            'cantidad' => 'required',
        ]))->save();

        return "Me he acutalizado correctamente! :D!";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modulos\ReservaVehiculo\DetalleReservaVehiculo  $detalleReservaVehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalleReservaVehiculo = DetalleReservaVehiculo::find($id);
        $detalleReservaVehiculo->delete();
        return "lo eliminé";
    }
}
