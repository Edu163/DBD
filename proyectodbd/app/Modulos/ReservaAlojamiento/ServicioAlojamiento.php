<?php

namespace App\Modulos\ReservaAlojamiento;

use Illuminate\Database\Eloquent\Model;

class ServicioAlojamiento extends Model
{
	protected $table = 'servicios_alojamientos';
	
	protected $id_hotel;
    protected $nombre;
    protected $precio;
    protected $descripcion;

    protected $filleable = [
    	'id_hotel',
    	'nombre',
    	'precio',
    	'descripcion'
	];
	
	/* Relaciones */

	public function habitacion_servicio(){
    	return $this->hasMany(HabitacionServicio::class);
	}

	public function alojamiento_servicio(){
    	return $this->hasMany(AlojamientoServicio::class);
	}
}