<?php

namespace App\Modules\FlightReservation;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    protected $table = 'airports';

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

	public function originDestiny(){
    	return $this->hasMany(OriginDestiny::class);
	}
}
