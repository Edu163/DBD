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
        $hotels = Hotel::all();
        return view('modulos.ReservaAlojamiento.hotel.index', compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modulos.ReservaAlojamiento.hotel.create');
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

        return redirect('/hotels')->with($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaAlojamiento\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        if ($hotel->exists()) {
            return view('modulos.ReservaAlojamiento.hotel.show', compact('hotel'));
        } else {
            $response = ['error' => 'No existe la id solicitada'];
            return redirect('/hotels')->with($response);
        }
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
    public function update(Request $request, Hotel $hotel)
    {
         $this->validate($request, [
            'nombre' => 'required',
            'pais' => 'required',
            'direccion' => 'required',
            'estrellas' => 'required',
            'valoracion' => 'required',
            'capacidad' => 'required',
        ]);
        $hotels->nombre = $request->get('nombre');
        $hotels->pais = $request->get('pais');
        $hotels->direccion = $request->get('direccion');
        $hotels->estrellas = $request->get('estrellas');
        $hotels->valoracion = $request->get('valoracion');
        $hotels->capacidad = $request->get('capacidad');
        

        $dataUpdate = $hotels->save();

        if ($dataUpdate) 
        {
            $response = ['success' => 'Actualizado con éxito!'];
        } 
        else 
        {
            $response = ['error' => 'Ha ocurrido un error en la Base de Datos al actualizar!'];
        }

        return redirect('/hotels/'.$hotel->id.'/edit')->with($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modulos\ReservaAlojamiento\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
         $response = [];
        try {
          $hotel->delete();
          $response = ['success' => 'Eliminado con éxito!'];
        } catch (\Exception $e) {
          $response = ['error' => 'Error al eliminar el registro!'];
        }

        return redirect('/hotels')->with($response);
    }
}
