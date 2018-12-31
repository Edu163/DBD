<?php

namespace App\Modulos\ReservaAlojamiento;

use Illuminate\Database\Eloquent\Model;

class HabitacionServicio extends Model
{
    protected $table = 'habitaciones_servicios';

    protected $servicio_alojamiento_id;
    protected $habitacion_hotel_id;

    protected $fillable = [
    	'servicio_alojamiento_id',
    	'habitacion_hotel_id',
    ];

    /* Relaciones */

	public function habitacion_hotel(){
    	return $this->belongsTo(HabitacionHotel::class);
    }
	
	public function servicio_alojamiento(){
    	return $this->belongsTo(ServicioAlojamiento::class);
    }
}