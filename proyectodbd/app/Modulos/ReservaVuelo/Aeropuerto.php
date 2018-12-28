<?php

namespace App\Modulos\ReservaVuelo;

use Illuminate\Database\Eloquent\Model;

class Aeropuerto extends Model
{
    protected $table = 'aeropuertos';

    protected $pais;
    protected $ciudad;
    protected $direccion;
    protected $nombre;

    protected $fillable = [
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
