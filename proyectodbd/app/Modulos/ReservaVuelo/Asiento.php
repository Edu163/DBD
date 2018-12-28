<?php

namespace App\Modulos\ReservaVuelo;

use Illuminate\Database\Eloquent\Model;

class Asiento extends Model
{
    protected $table = 'asientos';

    protected $numero;
    protected $letra;
    protected $tipo;
    protected $clase;
    protected $disponible;
    protected $id_avion;

    protected $fillable = [
        'numero',
        'letra',
        'tipo',
        'clase',
        'disponible',
        'id_detalle_vuelo',
    ];

    /* Relaciones */

    public function detalle_vuelo()
    {
        return $this->belongsTo(DetalleVuelo::class);
    }

    public function check_in(){
    	return $this->hasMany(CheckIn::class);
	}
}
