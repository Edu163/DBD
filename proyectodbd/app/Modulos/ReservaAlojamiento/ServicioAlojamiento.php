<?php

namespace App\Modulos\ReservaAlojamiento;

use Illuminate\Database\Eloquent\Model;

class ServicioAlojamiento extends Model
{
	protected $table = 'servicios_alojamientos';
	
	protected $hotel_id;
    protected $nombre;
    protected $precio;
    protected $descripcion;

    protected $fillable = [
    	'hotel_id',
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