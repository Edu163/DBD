<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Modulos\ReservaVuelo\DetalleVuelo;
use App\Modulos\ReservaVuelo\Aeropuerto;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
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
        return User::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->fill($this->validate($request, [
            'nombre' => 'required',
            'apellido' => 'required',
            'password' => 'required',
            'acceso' => 'required',
            'n_documento' => 'required',
            'tipo_documento' => 'required',
            'pais' => 'required',
            'puntos' => 'required',
            'millas' => 'required',
            'millas_elite' => 'required',
            'telefono' => 'required',
            'categoria' => 'required',
            'fecha_nac' => 'required',
        ]))->save();

        return "Me he acutalizado correctamente! :D!";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return "lo eliminé";
    }
    public function filtrar($id_origen,$id_destino)
    {
        $detalle_vuelo = DetalleVuelo::where('id_destino','=',$id_destino)
        ->where('id_origen','=',$id_origen)->get();
        return $detalle_vuelo;
        
    }
    public function buy($id_origen,$id_destino)
    {
        $detalle_vuelo = DetalleVuelo::where('id_destino','=',$id_destino)
        ->where('id_origen','=',$id_origen)->get();
        return $detalle_vuelo;
        
    }
}
