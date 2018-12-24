<?php

namespace App\Modulos\ReservaAlojamiento;

use Illuminate\Database\Eloquent\Model;

class ServicioAlojamiento extends Model
{
<<<<<<< HEAD:proyectodbd/app/ServicioAlojamiento.php
    protected $table = 'servicios_alojamientos';
    protected $primaryKey = 'id';
=======
	protected $table = 'servicios_alojamientos';
	
	protected $id_hotel;
    protected $nombre;
    protected $precio;
    protected $descripcion;

>>>>>>> development:proyectodbd/app/Modulos/ReservaAlojamiento/ServicioAlojamiento.php
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