<?php

namespace App\Http\Controllers\ReservaAutoControllers;

use App\Modulos\ReservaAuto\DetalleReservaAuto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetalleReservaAutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DetalleReservaAuto::all();
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
        return DetalleReservaAuto::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaAuto\DetalleReservaAuto  $detalleReservaAuto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return DetalleReservaAuto::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaAuto\DetalleReservaAuto  $detalleReservaAuto
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleReservaAuto $detalleReservaAuto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaAuto\DetalleReservaAuto  $detalleReservaAuto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $detalleReservaAuto = DetalleReservaAuto::find($id);
        $detalleReservaAuto->fill($this->validate($request, [
            'id_res_auto' => 'required',
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
     * @param  \App\Modulos\ReservaAuto\DetalleReservaAuto  $detalleReservaAuto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalleReservaAuto = DetalleReservaAuto::find($id);
        $detalleReservaAuto->delete();
        return "lo eliminé";
    }
}
