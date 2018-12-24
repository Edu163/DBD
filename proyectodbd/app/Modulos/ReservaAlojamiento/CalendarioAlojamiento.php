<?php

namespace App\Modulos\ReservaAlojamiento;

use Illuminate\Database\Eloquent\Model;

class CalendarioAlojamiento extends Model
{
<<<<<<< HEAD:proyectodbd/app/CalendarioAlojamiento.php
    protected $table = 'calendarios_alojamientos';
    protected $primaryKey = 'id';
=======
	protected $table = 'calendarios_alojamientos';
	
	protected $año;
    protected $mes;
    protected $dia;

>>>>>>> development:proyectodbd/app/Modulos/ReservaAlojamiento/CalendarioAlojamiento.php
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
