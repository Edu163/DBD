<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HabitacionHotel extends Model
{
    protected $table = 'habitaciones_hoteles';
    protected $primaryKey = 'id';
    protected $filleable = [
    	'id',
    	'id_hotel',
    	'id_calendario_alojamiento',
    	'capacidad',
    	'camas',
    	'numero'
    ];
}
