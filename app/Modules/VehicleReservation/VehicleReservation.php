<?php

namespace App\Modules\VehicleReservation;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Others\Sell;

class VehicleReservation extends Model
{
    protected $table = 'vehicle_reservations';

    protected $sell_id;
    protected $fecha;
    protected $monto_total;

    protected $fillable = [
        'sell_id',
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
