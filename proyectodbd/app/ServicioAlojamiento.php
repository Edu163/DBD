<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicioAlojamiento extends Model
{
    protected $table = 'servicios_alojamientos';

    protected $filleable = [
    	'id',
    	'id_hotel',
    	'nombre',
    	'precio',
    	'descripcion'
    ];
}