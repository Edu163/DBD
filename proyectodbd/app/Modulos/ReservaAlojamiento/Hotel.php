<?php

namespace App\Modulos\ReservaAlojamiento;

use Illuminate\Database\Eloquent\Model;


class Hotel extends Model
{
<<<<<<< HEAD:proyectodbd/app/Hotel.php
    protected $table = 'hoteles';
    protected $primaryKey = 'id';
=======
	protected $table = 'hoteles';
	
	protected $nombre;
    protected $pais;
    protected $direccion;
    protected $estrellas;
    protected $valoracion;
    protected $capacidad;

>>>>>>> development:proyectodbd/app/Modulos/ReservaAlojamiento/Hotel.php
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
