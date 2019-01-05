<?php

namespace App\Modulos\ReservaVehiculo;

use Illuminate\Database\Eloquent\Model;

class ReservaVehiculo extends Model
{
    protected $table = 'reservas_vehiculos';

    protected $venta_id;
    protected $fecha;
    protected $monto_total;

    protected $fillable = [
        'venta_id',
        'fecha',
        'monto_total',
    ];

    /* Relaciones */

    public function venta(){
    	return $this->belongsTo(Venta::class);
    }

    public function detalle_reserva_vehiculos(){
    	return $this->hasMany(DetalleReservaVehiculos::class);
    }
}
