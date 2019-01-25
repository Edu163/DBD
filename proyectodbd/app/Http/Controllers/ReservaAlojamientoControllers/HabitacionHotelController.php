<?php

namespace App\Http\Controllers\ReservaAlojamientoControllers;


use App\Modulos\ReservaAlojamiento\Hotel;
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
        return HabitacionHotel::all()->where('hotel_id', request('hotel_id'));
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
         $habitacionHotelData = $this->validate($request, [
            'hotel_id' => 'required',
            'calendario_alojamiento_id' => 'required',
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

         return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulos\ReservaAlojamiento\HabitacionHotel  $habitacionHotel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return HabitacionHotel::findOrFail($id);
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
    public function update(Request $request, $id)
    {
        $habitacionHotel = $HabitacionHotel::find($id);
        $habitacionHotel->fill($this->validate($request, [
            'hotel_id' => 'required',
            'calendario_alojamiento_id' => 'required',
            'capacidad' => 'required',
            'camas' => 'required',
            'numero' => 'required',
        ]))->save();
        
            return 'Actualizado con éxito!';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modulos\ReservaAlojamiento\HabitacionHotel  $habitacionHotel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $habitacionHotel = HabitacionHotel::findOrFail($id);
        $habitacionHotel->delete();
        return "eliminado";
    }
}
