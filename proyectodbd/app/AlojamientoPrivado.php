<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlojamientoPrivado extends Model
{
    protected $table = 'alojamientos_privados';
    protected $primaryKey = 'id';
    protected $filleable = [
    	'id',
	    'id_calendario_alojamiento',
	    'capacidad',
	    'direccion',
	    'nombre',
	    'estrella',
	    'valoracion',
	    'pais'
    ];
}
