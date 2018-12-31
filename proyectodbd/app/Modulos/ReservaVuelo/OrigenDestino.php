<?php

namespace App\Modulos\ReservaVuelo;

use Illuminate\Database\Eloquent\Model;

class OrigenDestino extends Model
{
    protected $table = 'origenes_destinos';

    protected $detalle_vuelo_id;
    protected $aeropuerto_id;

    protected $fillable = [
        'detalle_vuelo_id',
        'aeropuerto_id',
    ];

    /* Relaciones */

	public function detalle_vuelo(){
    	return $this->belongsTo(DetalleVuelo::class);
	}
    
    public function aeropuerto(){
    	return $this->belongsTo(Aeropuerto::class);
	}
}
