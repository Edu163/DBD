<?php

namespace App\Modulos\ReservaVehiculo;

use Illuminate\Database\Eloquent\Model;

class DetalleReservaVehiculo extends Model
{
    protected $table = 'detalles_reservas_vehiculos';

    protected $reserva_vehiculo_id;
    protected $patente;
    protected $fecha_retiro;
    protected $fecha_regreso;
    protected $precio_reserva;
    protected $descuento;
    protected $cantidad;

    protected $fillable = [
        'reserva_vehiculo_id',
        'patente',
        'fecha_retiro',
        'fecha_regreso',
        'precio_reserva',
        'descuento',
        'cantidad',
    ];

    /* Relaciones */

    public function reserva_vehiculo(){
    	return $this->belongsTo(ReservaVehiculo::class);
    }

    public function vehiculo(){
    	return $this->belongsTo(Vehiculo::class);
    }
}