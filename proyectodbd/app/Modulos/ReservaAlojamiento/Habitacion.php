<?php

namespace App\Modulos\ReservaAlojamiento;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
	protected $table = 'habitaciones';
	
	protected $alojamiento_privado_id;
    protected $piso;
    protected $numero;
    protected $camas;

    protected $fillable = [
    	'alojamiento_privado_id',
    	'piso',
    	'numero',
    	'camas'
	];
	
	/* Relaciones */

	public function alojamiento_privado(){
    	return $this->belongsTo(AlojamientoPrivado::class);
    }
}