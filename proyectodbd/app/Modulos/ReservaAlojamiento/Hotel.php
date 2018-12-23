<?php

namespace App\Modulos\ReservaAlojamiento;

use Illuminate\Database\Eloquent\Model;


class Hotel extends Model
{
	protected $table = 'hoteles';
	
	protected $nombre;
    protected $pais;
    protected $direccion;
    protected $estrellas;
    protected $valoracion;
    protected $capacidad;

    protected $filleable = [
    	'nombre',
    	'pais',
    	'direccion',
    	'estrellas',
    	'valoracion',
    	'capacidad'
	];
	
	/* Relaciones */

	public function habitacion_hotel(){
    	return $this->hasMany(HabitacionHotel::class);
	}
}
