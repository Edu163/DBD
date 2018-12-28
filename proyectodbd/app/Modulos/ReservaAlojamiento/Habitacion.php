<?php

namespace App\Modulos\ReservaAlojamiento;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
	protected $table = 'habitaciones';
	
	protected $id_alojamiento_privado;
    protected $piso;
    protected $numero;
    protected $camas;

    protected $fillable = [
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