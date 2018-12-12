<?php

namespace App\Modulos\ReservaAuto;

use Illuminate\Database\Eloquent\Model;

class ReservaAuto extends Model
{
    protected $table = 'reservas_autos';

    protected $filleable = [
        'id_venta',
        'fecha',
        'monto_total',
    ];
}
