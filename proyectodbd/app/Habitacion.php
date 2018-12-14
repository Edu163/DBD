<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    protected $table = 'habitaciones';

    protected $filleable = [
    	'id',
    	'id_alojamiento_privado',
    	'piso',
    	'numero',
    	'camas'
    ];
}