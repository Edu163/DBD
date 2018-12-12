<?php

namespace App\Modulos\ReservaAuto;

use Illuminate\Database\Eloquent\Model;

class DetalleReservaAuto extends Model
{
    protected $table = 'detalles_reservas_autos';

    protected $filleable = [
        'id_res_auto',
        'patente',
        'fecha_retiro',
        'fecha_regreso',
        'precio_reserva',
        'descuento',
        'cantidad',
    ];
}
