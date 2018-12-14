<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleReservaHotel extends Model
{
    protected $table = 'detalles_reservas_hoteles';

    protected $filleable = [
    	'id',
	    'id_reserva_hotel',
	    'id_habitacion_hotel',
	    'id_alojamiento_privado',
	    'fecha_ingreso',
	    'fecha_egreso',
	    'precio',
	    'tipo'
    ];
}