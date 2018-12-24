<?php

namespace App\Modulos\ReservaVuelo;

use Illuminate\Database\Eloquent\Model;

class Aeropuerto extends Model
{
    protected $table = 'aeropuertos';
<<<<<<< HEAD:proyectodbd/app/Aeropuerto.php
    protected $primaryKey = 'id';
=======

    protected $pais;
    protected $ciudad;
    protected $direccion;
    protected $nombre;

>>>>>>> development:proyectodbd/app/Modulos/ReservaVuelo/Aeropuerto.php
    protected $filleable = [
        'pais',
        'ciudad',
        'direccion',
        'nombre'
    ];

    /* Relaciones */

	public function origen_destino(){
    	return $this->hasMany(OrigenDestino::class);
	}
}
