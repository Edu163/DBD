<?php

namespace App\Modulos\ReservaAlojamiento;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
<<<<<<< HEAD:proyectodbd/app/Habitacion.php
    protected $table = 'habitaciones';
    protected $primaryKey = 'id';
=======
	protected $table = 'habitaciones';
	
	protected $id_alojamiento_privado;
    protected $piso;
    protected $numero;
    protected $camas;

>>>>>>> development:proyectodbd/app/Modulos/ReservaAlojamiento/Habitacion.php
    protected $filleable = [
    	'id_alojamiento_privado',
    	'piso',
    	'numero',
    	'camas'
	];
	
	/* Relaciones */

	public function alojamiento_privado(){
    	return $this->belongsTo(AlojamientoPrivado::class);
    }
}