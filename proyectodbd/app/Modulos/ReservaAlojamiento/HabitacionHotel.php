<?php

namespace App\Modulos\ReservaAlojamiento;

use Illuminate\Database\Eloquent\Model;

class HabitacionHotel extends Model
{
	protected $table = 'habitaciones_hoteles';
	
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

	public function detalle_reserva_hotel(){
    	return $this->hasMany(DetalleReservaHotel::class);
	}

	public function calendario_alojamiento(){
    	return $this->belongsTo(CalendarioAlojamiento::class);
    }

	public function habitacion_servicio(){
    	return $this->hasMany(HabitacionServicio::class);
	}
	
	public function hotel(){
    	return $this->belongsTo(Hotel::class);
    }
}
