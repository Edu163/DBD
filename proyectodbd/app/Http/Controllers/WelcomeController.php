<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Modulos\ReservaVehiculo\Zona;

class WelcomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zonas = Zona::all();

        return view('home', compact(
            'zonas'
        ));
    }
}
