<?php

namespace App\Modulos\ReservaAlojamiento;

use Illuminate\Database\Eloquent\Model;

class HabitacionServicio extends Model
{
    protected $table = 'habitaciones_servicios';

    protected $id_servicio_alojamiento;
    protected $id_habitacion_hotel;

    protected $fillable = [
    	'id_servicio_alojamiento',
    	'id_habitacion_hotel',
    ];

    /* Relaciones */

	public function habitacion_hotel(){
    	return $this->belongsTo(HabitacionHotel::class);
    }
	
	public function servicio_alojamiento(){
    	return $this->belongsTo(ServicioAlojamiento::class);
    }
}