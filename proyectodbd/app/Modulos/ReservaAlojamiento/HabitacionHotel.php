<?php

namespace App\Modulos\ReservaAlojamiento;

use Illuminate\Database\Eloquent\Model;

class HabitacionHotel extends Model
{
<<<<<<< HEAD:proyectodbd/app/HabitacionHotel.php
    protected $table = 'habitaciones_hoteles';
    protected $primaryKey = 'id';
=======
	protected $table = 'habitaciones_hoteles';
	
	protected $id_hotel;
    protected $id_calendario_alojamiento;
    protected $capacidad;
    protected $camas;
    protected $numero;

>>>>>>> development:proyectodbd/app/Modulos/ReservaAlojamiento/HabitacionHotel.php
    protected $filleable = [
    	'id_hotel',
    	'id_calendario_alojamiento',
    	'capacidad',
    	'camas',
    	'numero'
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
