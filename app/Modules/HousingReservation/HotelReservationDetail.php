<?php

namespace App\Modules\HousingReservation;

use Illuminate\Database\Eloquent\Model;

class HotelReservationDetail extends Model
{
    protected $table = 'hotel_reservation_details';
	
	protected $reserva_hotel_id;
    protected $habitacion_hotel_id;
    protected $alojamiento_privado_id;
    protected $fecha_ingreso;
    protected $fecha_egreso;
	protected $precio;
	protected $tipo;
	

    protected $fillable = [
	    'reserva_hotel_id',
	    'habitacion_hotel_id',
	    'alojamiento_privado_id',
	    'fecha_ingreso',
	    'fecha_egreso',
	    'precio',
	    'tipo',
	];
	
	/* Relaciones */
	
	public function hotelReservation(){
    	return $this->belongsTo(hotelReservation::class);
	}

	public function hotelRoom(){
    	return $this->belongsTo(hotelRoom::class);
	}

	public function privateHousing(){
    	return $this->belongsTo(PrivateHousing::class);
    }
}
