<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HabitacionServicio extends Model
{
    protected $table = 'habitaciones_servicios';

    protected $filleable = [
    	'id_servicio_alojamiento',
    	'id_habitacion_hotel',
    ];
}