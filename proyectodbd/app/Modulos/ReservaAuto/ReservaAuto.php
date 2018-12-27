<?php

namespace App\Modulos\ReservaAuto;

use Illuminate\Database\Eloquent\Model;

class ReservaAuto extends Model
{
    protected $table = 'reservas_autos';

    protected $id_venta;
    protected $fecha;
    protected $monto_total;

    protected $fillable = [
        'id_venta',
        'fecha',
        'monto_total',
    ];

    /* Relaciones */

    public function venta(){
    	return $this->belongsTo(Venta::class);
    }

    public function detalle_reserva_auto(){
    	return $this->hasMany(DetalleReservaAuto::class);
    }
}
