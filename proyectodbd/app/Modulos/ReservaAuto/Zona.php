<?php

namespace App\Modulos\ReservaAuto;

use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    protected $table = 'zonas';

    protected $nombre;
    protected $direccion;
    protected $coordenadas;

    protected $fillable = [
        'nombre',
        'direccion',
    ];

    /* Relaciones */

    public function reserva_auto(){
    	return $this->hasMany(ReservaAuto::class);
    }

}
