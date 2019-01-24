<?php

namespace App\Http\Controllers\ReservaVueloControllers;


use App\Modulos\ReservaVuelo\ReservaVuelo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservaVueloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ReservaVuelo::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return "hola :D";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reserva = ReservaVuelo::create($this->validate($request, [
            'vuelo_id' => 'required',
            'tipo' => 'required',
            'fecha' => 'required',
            'precio' => 'required',
        ]));

        if ($reserva->exists()) {
            $response = ['success' => 'Creado con éxito!'];
            $reserva->save();
        } else {
            $response = ['error' => 'No se ha podido crear!'];
        }
        $reserva = Reserva::All();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ReservaVuelo::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reservaVuelo = ReservaVuelo::find($id);
        $reservaVuelo->fill($this->validate($request, [
            'vuelo_id' => 'required',
            'tipo' => 'required',
            'fecha' => 'required',
            'precio' => 'required',
        ]))->save();

        return "Me he acutalizado correctamente! :D!";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservaVuelo = ReservaVuelo::find($id);
        $reservaVuelo->delete();
        return "lo eliminé";
    }
}
