<?php

namespace App\Modulos\ReservaVuelo;

use Illuminate\Database\Eloquent\Model;

class Asiento extends Model
{
    protected $table = 'asientos';

    protected $avion_id;
    protected $numero;
    protected $letra;
    protected $tipo;
    protected $clase;
    protected $disponible;
    

    protected $fillable = [
        'avion_id',
        'numero',
        'letra',
        'tipo',
        'clase',
        'disponible',
        
    ];

    /* Relaciones */

    public function avion()
    {
        return $this->belongsTo(Avion::class);
    }

    public function check_in(){
    	return $this->hasMany(CheckIn::class);
	}
}
