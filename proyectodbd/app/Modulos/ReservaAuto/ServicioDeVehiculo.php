<?php

namespace App\Modulos\ReservaAuto;

use Illuminate\Database\Eloquent\Model;

class ServicioDeVehiculo extends Model
{
    protected $table = 'servicios_de_vehiculos';

    protected $nombre_servicio;
    protected $duracion;

    protected $filleable = [
        'nombre_servicio',
        'duracion',
    ];

    /* Relaciones */

    public function servicio_y_vehiculo(){
    	return $this->hasMany(ServicioYVehiculo::class);
    }

    public function servicio_proveedor(){
    	return $this->hasMany(ServicioProveedor::class);
    }
}