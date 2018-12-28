<?php

namespace App\Http\Controllers\ReservaAlojamientoControllers;

use App\Modulos\ReservaAlojamiento\Hotel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return Hotel::all();
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
         $hotelData = $this->validate($request, [
            'nombre' => 'required',
            'pais' => 'required',
            'direccion' => 'required',
            'estrellas' => 'required',
            'valoracion' => 'required',
            'capacidad' => 'required',
        ]);

        $hotel = Hotel::create($hotelData);

        if ($hotel->exists()) {
          $response = ['success' => 'Creado con éxito!'];
        } else {
          $response = ['error' => 'No se ha podido crear!'];
        }

         return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaAlojamiento\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Hotel::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaAlojamiento\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
         if ($hotel->exists()) {
            return view('modulos.ReservaAlojamiento.hotel.edit', compact('hotel'));
        } else {
            $response = ['error' => 'No es posible editar una id que no existe'];
            return redirect('/hotels')->with($response);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaAlojamiento\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hotel = $Hotel::find($id);
        $hotel->fill($this->validate($request, [
            'nombre' => 'required',
            'pais' => 'required',
            'direccion' => 'required',
            'estrellas' => 'required',
            'valoracion' => 'required',
            'capacidad' => 'required',
        ]))->save();
        
            return 'Actualizado con éxito!';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modulos\ReservaAlojamiento\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $hotel = Hotel::findOrFail($id);
        $hotel->delete();
        return "eliminado";
    }
}
