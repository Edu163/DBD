<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Hotel extends Model
{
    protected $table = 'hoteles';
    protected $primaryKey = 'id';
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
