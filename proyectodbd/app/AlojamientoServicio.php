<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlojamientoServicio extends Model
{
    protected $table = 'alojamientos_servicios';
    protected $primaryKey = 'id';
    protected $filleable = [
    	'id',
	    'id_servicio_alojamiento',
	    'id_alojamiento_privado'
    ];
}