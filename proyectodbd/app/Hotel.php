<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Hotel extends Model
{
    protected $table = 'hoteles';

    protected $filleable = [
    	'id',
    	'nombre',
    	'pais',
    	'direccion',
    	'estrellas',
    	'valoracion',
    	'capacidad'
    ];
}
