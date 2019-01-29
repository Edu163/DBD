<?php

namespace App\Modules\VehicleReservation;

use Illuminate\Database\Eloquent\Model;

class VehicleReservationDetail extends Model
{
    protected $table = 'vehicle_reservation_details';

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

    public function vehicleReservation(){
    	return $this->belongsTo(VehicleReservation::class);
    }

    public function vehicle(){
    	return $this->belongsTo(Vehicle::class);
    }
}
