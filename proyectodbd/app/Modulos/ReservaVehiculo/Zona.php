<?php

namespace App\Modulos\ReservaVehiculo;

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
        'coordenadas',
    ];

    /* Relaciones */

    public function reserva_vehiculo(){
    	return $this->hasMany(ReservaVehiculo::class);
    }

}
