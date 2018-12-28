<?php

namespace App\Modulos\ReservaVuelo;

use Illuminate\Database\Eloquent\Model;

class OrigenDestino extends Model
{
    protected $table = 'origenes_destinos';

    protected $id_detalle_vuelo;
    protected $id_aeropuerto;

    protected $fillable = [
        'id_detalle_vuelo',
        'id_aeropuerto',
    ];

    /* Relaciones */

	public function detalle_vuelo(){
    	return $this->belongsTo(DetalleVuelo::class);
	}
    
    public function aeropuerto(){
    	return $this->belongsTo(Aeropuerto::class);
	}
}
