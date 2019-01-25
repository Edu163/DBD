<?php

namespace App\Modulos\ReservaVuelo;

use Illuminate\Database\Eloquent\Model;

class Asiento extends Model
{
    protected $table = 'asientos';

    protected $detalle_vuelo_id;
    protected $numero;
    protected $letra;
    protected $tipo;
    protected $clase;
    protected $disponible;
    

    protected $fillable = [
        'detalle_vuelo_id',
        'numero',
        'letra',
        'tipo',
        'clase',
        'disponible',
        
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
