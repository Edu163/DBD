<?php

namespace App\Modules\FlightReservation;

use Illuminate\Database\Eloquent\Model;

class OriginDestiny extends Model
{
    protected $table = 'origin_destinies';

    protected $detalle_vuelo_id;
    protected $aeropuerto_id;

    protected $fillable = [
        'detalle_vuelo_id',
        'aeropuerto_id',
    ];

    /* Relaciones */

	public function flightDetail(){
    	return $this->belongsTo(FlightDetail::class);
	}
    
    public function airport(){
    	return $this->belongsTo(Airport::class);
	}
}
