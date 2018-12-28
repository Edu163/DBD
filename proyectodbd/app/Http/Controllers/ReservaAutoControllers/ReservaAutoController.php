<?php

namespace App\Http\Controllers\ReservaAutoControllers;

use App\Modulos\ReservaAuto\ReservaAuto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservaAutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ReservaAuto::all();
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
        return ReservaAuto::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaAuto\ReservaAuto  $reservaAuto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ReservaAuto::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaAuto\ReservaAuto  $reservaAuto
     * @return \Illuminate\Http\Response
     */
    public function edit(ReservaAuto $reservaAuto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaAuto\ReservaAuto  $reservaAuto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reservaAuto = ReservaAuto::find($id);
        $reservaAuto->fill($this->validate($request, [
            'id_venta' => 'required',
            'fecha' => 'required',
            'monto_total' => 'required',
        ]))->save();

        return "Me he acutalizado correctamente! :D!";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modulos\ReservaAuto\ReservaAuto  $reservaAuto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservaAuto = ReservaAuto::find($id);
        $reservaAuto->delete();
        return "lo eliminé";
    }
}
