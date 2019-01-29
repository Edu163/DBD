<?php

namespace App\Modules\HousingReservation;

use Illuminate\Database\Eloquent\Model;

class HotelRoom extends Model
{
    protected $table = 'hotel_rooms';
	
	protected $hotel_id;
    protected $calendario_alojamiento_id;
    protected $capacidad;
    protected $camas;
    protected $numero;

    protected $fillable = [
    	'hotel_id',
    	'calendario_alojamiento_id',
    	'capacidad',
    	'camas',
		'numero',
		'precio'
	];
	
	/* Relaciones */

	public function hotelReservationDetail(){
    	return $this->hasMany(HotelReservationDetail::class);
	}

	public function housingCalendary(){
    	return $this->belongsTo(HousingCalendary::class);
    }

	public function serviceAndRoom(){
    	return $this->hasMany(ServiceAndRoom::class);
	}
	
	public function hotel(){
    	return $this->belongsTo(Hotel::class);
    }
}
