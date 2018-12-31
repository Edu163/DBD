<?php

namespace App\Modulos\ReservaAlojamiento;

use Illuminate\Database\Eloquent\Model;

class AlojamientoServicio extends Model
{
    protected $table = 'alojamientos_servicios';

    protected $servicio_alojamiento_id;
    protected $alojamiento_privado_id;

    protected $fillable = [
	    'servicio_alojamiento_id',
	    'alojamiento_privado_id',
    ];

    /* Relaciones */

    public function servicio_alojamiento(){
    	return $this->belongsTo(ServicioAlojamiento::class);
    }

    public function alojamiento_privado(){
    	return $this->belongsTo(AlojamientoPrivado::class);
    }
}