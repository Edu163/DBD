<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HabitacionHotel extends Model
{
    protected $table = 'habitaciones_hoteles';

    protected $filleable = [
    	'id_hotel',
    	'id_calendario_alojamiento',
    	'capacidad',
    	'camas',
    	'numero'
    ];
}
