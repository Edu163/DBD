<?php

namespace App\Http\Controllers\ReservaAlojamientoControllers;

use App\Modulos\ReservaAlojamiento\HabitacionHotel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HabitacionHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $habitacionHotels = HabitacionHotel::all();
        return view('modulos.ReservaAlojamiento.habitacionHotel.index', compact('habitacionHotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modulos.ReservaAlojamiento.habitacionHotel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $habitacionHotelData = $this->validate($request, [
            'id_hotel' => 'required',
            'id_calendario_alojamiento' => 'required',
            'capacidad' => 'required',
            'camas' => 'required',
            'numero' => 'required',
        ]);

        $habitacionHotel = HabitacionHotel::create($habitacionHotelData);

        if ($habitacionHotel->exists()) {
          $response = ['success' => 'Creado con éxito!'];
        } else {
          $response = ['error' => 'No se ha podido crear!'];
        }

        return redirect('/habitacionHotels')->with($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaAlojamiento\HabitacionHotel  $habitacionHotel
     * @return \Illuminate\Http\Response
     */
    public function show(HabitacionHotel $habitacionHotel)
    {
         if ($habitacionHotel->exists()) {
            return view('modulos.ReservaAlojamiento.habitacionHotel.show', compact('habitacionHotel'));
        } else {
            $response = ['error' => 'No existe la id solicitada'];
            return redirect('/habitacionHotels')->with($response);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulos\ReservaAlojamiento\HabitacionHotel  $habitacionHotel
     * @return \Illuminate\Http\Response
     */
    public function edit(HabitacionHotel $habitacionHotel)
    {
        if ($habitacionHotel->exists()) {
            return view('modulos.ReservaAlojamiento.habitacionHotel.edit', compact('habitacionHotel'));
        } else {
            $response = ['error' => 'No es posible editar una id que no existe'];
            return redirect('/habitacionHotels')->with($response);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulos\ReservaAlojamiento\HabitacionHotel  $habitacionHotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HabitacionHotel $habitacionHotel)
    {
         $this->validate($request, [
            'id_hotel' => 'required',
            'id_calendario_alojamiento' => 'required',
            'capacidad' => 'required',
            'camas' => 'required',
            'numero' => 'required',
        ]);

     
        $habitacionHotels->id_hotel = $request->get('id_hotel');
        $habitacionHotels->id_calendario_alojamiento = $request->get('id_calendario_alojamiento');
        $habitacionHotels->capacidad = $request->get('capacidad');
        $habitacionHotels->camas = $request->get('camas');
        $habitacionHotels->numero = $request->get('numero');
        

        $dataUpdate = $habitacionHotels->save();

        if ($dataUpdate) 
        {
            $response = ['success' => 'Actualizado con éxito!'];
        } 
        else 
        {
            $response = ['error' => 'Ha ocurrido un error en la Base de Datos al actualizar!'];
        }

        return redirect('/habitacionHotels/'.$habitacionHotel->id.'/edit')->with($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modulos\ReservaAlojamiento\HabitacionHotel  $habitacionHotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(HabitacionHotel $habitacionHotel)
    {
         $response = [];
        try {
          $habitacionHotel->delete();
          $response = ['success' => 'Eliminado con éxito!'];
        } catch (\Exception $e) {
          $response = ['error' => 'Error al eliminar el registro!'];
        }

        return redirect('/habitacionHotels')->with($response);
    }
}
