<?php

namespace App\Modulos\ReservaAuto;

use Illuminate\Database\Eloquent\Model;

class ServicioYVehiculo extends Model
{
    protected $table = 'servicios_y_vehiculos';

    protected $id_servicio;
    protected $patente;
    protected $precio;

    protected $fillable = [
        'id_servicio',
        'patente',
        'precio',
    ];

    /* Relaciones */

    public function reserva_auto(){
    	return $this->belongsTo(ReservaAuto::class);
    }

    public function automovil(){
    	return $this->belongsTo(Automovil::class);
    }
}
