<?php

namespace App\Modulos\ReservaAlojamiento;

use Illuminate\Database\Eloquent\Model;

class CalendarioAlojamiento extends Model
{
	protected $table = 'calendarios_alojamientos';
	
	protected $año;
    protected $mes;
    protected $dia;

    protected $filleable = [
    	'año',
    	'mes',
    	'dia'
	];
	
	/* Relaciones */

	public function habitacion_hotel(){
    	return $this->hasMany(HabitacionHotel::class);
	}

	public function alojamiento_privado(){
    	return $this->hasMany(AlojamientoPrivado::class);
	}
}
