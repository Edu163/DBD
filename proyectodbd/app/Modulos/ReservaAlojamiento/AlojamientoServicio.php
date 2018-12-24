<?php

namespace App\Modulos\ReservaAlojamiento;

use Illuminate\Database\Eloquent\Model;

class AlojamientoServicio extends Model
{
    protected $table = 'alojamientos_servicios';
<<<<<<< HEAD:proyectodbd/app/AlojamientoServicio.php
    protected $primaryKey = 'id';
=======

    protected $id_servicio_alojamiento;
    protected $id_alojamiento_privado;

>>>>>>> development:proyectodbd/app/Modulos/ReservaAlojamiento/AlojamientoServicio.php
    protected $filleable = [
	    'id_servicio_alojamiento',
	    'id_alojamiento_privado',
    ];

    /* Relaciones */

    public function servicio_alojamiento(){
    	return $this->belongsTo(ServicioAlojamiento::class);
    }

    public function alojamiento_privado(){
    	return $this->belongsTo(AlojamientoPrivado::class);
    }
}