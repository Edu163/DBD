<?php

namespace App\Modules\HousingReservation;

use Illuminate\Database\Eloquent\Model;

class ServiceAndRoom extends Model
{
    protected $table = 'service_and_rooms';

    protected $servicio_alojamiento_id;
    protected $habitacion_hotel_id;

    protected $fillable = [
    	'servicio_alojamiento_id',
    	'habitacion_hotel_id',
    ];

    /* Relaciones */

	public function hotelRoom(){
    	return $this->belongsTo(HotelRoom::class);
    }
	
	public function housingService(){
    	return $this->belongsTo(HousingService::class);
    }
}
