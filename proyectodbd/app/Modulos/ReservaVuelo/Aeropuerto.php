<?php

namespace App\Modulos\ReservaVuelo;

use Illuminate\Database\Eloquent\Model;

class Aeropuerto extends Model
{
    protected $table = 'aeropuertos';
<<<<<<< HEAD:proyectodbd/app/Aeropuerto.php
<<<<<<< HEAD:proyectodbd/app/Aeropuerto.php
    protected $primaryKey = 'id';
    protected $filleable = [
=======
=======
>>>>>>> guillermo:proyectodbd/app/Modulos/ReservaVuelo/Aeropuerto.php

    protected $pais;
    protected $ciudad;
    protected $direccion;
    protected $nombre;

    protected $fillable = [
<<<<<<< HEAD:proyectodbd/app/Aeropuerto.php
>>>>>>> development:proyectodbd/app/Modulos/ReservaVuelo/Aeropuerto.php
=======
>>>>>>> guillermo:proyectodbd/app/Modulos/ReservaVuelo/Aeropuerto.php
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
