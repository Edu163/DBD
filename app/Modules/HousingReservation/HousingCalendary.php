<?php

namespace App\Modules\HousingReservation;

use Illuminate\Database\Eloquent\Model;

class HousingCalendary extends Model
{
    protected $table = 'housing_calendaries';
	
	protected $año;
    protected $mes;
    protected $dia;
   
    protected $fillable = [
    	'año',
    	'mes',
    	'dia'
	];
	
	/* Relaciones */

	public function hotelRoom(){
    	return $this->hasMany(hotelRoom::class);
	}

	public function privateHousing(){
    	return $this->hasMany(PrivateHousing::class);
	}
}
