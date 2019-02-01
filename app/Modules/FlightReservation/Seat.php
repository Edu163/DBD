<?php

namespace App\Modules\FlightReservation;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $table = 'seats';

    // protected $avion_id;
    protected $numero;
    protected $letra;
    protected $tipo;
    protected $clase;
    protected $disponible;
    

    protected $fillable = [
        // 'avion_id',
        'numero',
        'letra',
        'tipo',
        'clase',
        'disponible',
        
    ];

    /* Relaciones */

    public function airplane()
    {
        return $this->belongsTo(Airplane::class);
    }

    public function check_in(){
    	return $this->hasMany(CheckIn::class);
	}
}
