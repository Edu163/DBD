<?php

namespace App\Http\Controllers\HousingReservationControllers;

use App\Modules\HousingReservation\HousingCalendary;
use App\Modules\HousingReservation\HotelRoom;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HousingCalendaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $housingCalendary = $this->validate($request, [
            'año' => 'required',
            'mes' => 'required',
            'dia' => 'required',
        ]);

        $housingCalendary = HousingCalendary::create($housingCalendary);

        if ($housingCalendary->exists()) {
          $response = ['success' => 'Creado con éxito!'];
        } else {
          $response = ['error' => 'No se ha podido crear!'];
        }

        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HousingCalendary  $housingCalendary
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return HousingCalendary::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HousingCalendary  $housingCalendary
     * @return \Illuminate\Http\Response
     */
    public function edit(HousingCalendary $housingCalendary)
    {
        if ($housingCalendary->exists()) {
            return view('modules.housingReservation.housingCalendary.edit', compact('housingCalendary'));
        } else {
            $response = ['error' => 'No es posible editar una id que no existe'];
            return redirect('/housingCalendaries')->with($response);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HousingCalendary  $housingCalendary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $housingCalendary = HousingCalendary::find($id);
        $housingCalendary->fill($this->validate($request, [
            'año' => 'required',
            'mes' => 'required',
            'dia' => 'required',
        ]))->save();
        
        return 'Actualizado con éxito!';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HousingCalendary  $housingCalendary
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $housingCalendary = HousingCalendary::findOrFail($id);
        $housingCalendary->delete();
        return "eliminado";
    }
}
