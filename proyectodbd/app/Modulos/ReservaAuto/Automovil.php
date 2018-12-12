<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Automovil extends Model
{
    protected $table = 'automoviles';

    protected $fillable = [
        'patente',
        'id_calendario_vehiculo',
        'id_proveedor',
        'id_zona',
        'marca',
        'tipo',
        'gamma',
        'transmision',
        'combustible',
        'n_pasajeros',
        'equipaje_g',
        'equipaje_p',
        'n_puertas',
        'n_kilometraje',
        'precio_hora',
        'aire_acondicionado',
    ];

}
