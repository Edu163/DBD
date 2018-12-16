<?php

namespace App\Modulos\ReservaVuelo;

use Illuminate\Database\Eloquent\Model;

class Aeropuerto extends Model
{
    protected $table = 'aeropuertos';

    protected $filleable = [
        'pais',
        'ciudad',
        'direccion',
        'nombre'
    ];
}
