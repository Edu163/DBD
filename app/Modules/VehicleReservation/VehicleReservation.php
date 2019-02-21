<?php

namespace App\Modules\VehicleReservation;


use Illuminate\Database\Eloquent\Model;
use App\Modules\Others\Sell;
use App\Modules\VehicleReservation\Vehicle;

class VehicleReservation extends Model
{
    protected $table = 'vehicle_reservations';

    protected $sell_id;
    protected $fecha;
    protected $monto_total;

    protected $fillable = [
        'sell_id',
        'monto_total',
    ];

    /* Relaciones */

    public function sell(){
    	return $this->belongsTo(Sell::class);
    }
    public function vehicle(){
        return $this->hasMani(Vehicle::class);
    }
    public function vehicleReservationDetail(){
    	return $this->hasMany(VehicleReservationDetail::class);
    }
}
