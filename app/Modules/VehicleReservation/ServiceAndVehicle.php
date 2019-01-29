<?php

namespace App\Modules\VehicleReservation;

use Illuminate\Database\Eloquent\Model;

class ServiceAndVehicle extends Model
{
    protected $table = 'service_and_vehicles';

    protected $servicio_id;
    protected $patente;
    protected $precio;

    protected $fillable = [
        'servicio_id',
        'patente',
        'precio',
    ];

    /* Relaciones */

    public function vehicleReservation(){
    	return $this->belongsTo(VehicleReservation::class);
    }

    public function vehicle(){
    	return $this->belongsTo(Vehicle::class);
    }
}
