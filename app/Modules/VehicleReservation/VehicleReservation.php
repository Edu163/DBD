<?php

namespace App\Modules\VehicleReservation;

use Illuminate\Database\Eloquent\Model;

class VehicleReservation extends Model
{
    protected $table = 'vehicle_reservations';

    protected $venta_id;
    protected $fecha;
    protected $monto_total;

    protected $fillable = [
        'venta_id',
        'fecha',
        'monto_total',
    ];

    /* Relaciones */

    public function sell(){
    	return $this->belongsTo(Sell::class);
    }

    public function vehicleReservationDetail(){
    	return $this->hasMany(VehicleReservationDetail::class);
    }
}
