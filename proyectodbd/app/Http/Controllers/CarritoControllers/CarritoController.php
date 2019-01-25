<?php

namespace App\Http\Controllers\CarritoControllers;

use App\Modulos\ReservaAlojamiento\Hotel;
use App\Modulos\ReservaAlojamiento\Vuelo;
use App\Modulos\ReservaAlojamiento\Vehiculo;
use App\Modulos\ReservaAlojamiento\Paquete;
use App\Modulos\Carrito\Carrito;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
       $hoteles = Hotel::all()->where('nombre', '=', request('nombre_hotel'));

        return view('modulos.ReservaAlojamiento.hotel.index', compact('hoteles'));
        array('hotel' => array(), 'vuelo' => array(), 'vehiculo' => array());
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function show(Carrito $carrito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrito $carrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrito $carrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrito $carrito)
    {
        //
    }
}
