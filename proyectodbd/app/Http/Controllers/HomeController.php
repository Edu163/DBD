<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Modulos\ReservaVehiculo\Zona;
use App\Modulos\ReservaAlojamiento\Hotel;
use App\Modulos\ReservaVuelo\Aeropuerto;
use App\Modulos\ReservaVuelo\DetalleVuelo;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zonas = Zona::all();
        $hoteles = Hotel::all();
        $aeropuertos = Aeropuerto::all();
        $detalles_vuelos = DetalleVuelo::all();
        return view('home', compact(
            'zonas',
            'hoteles',
            'aeropuertos',
            'detalles_vuelos'
        ));
    }
}
