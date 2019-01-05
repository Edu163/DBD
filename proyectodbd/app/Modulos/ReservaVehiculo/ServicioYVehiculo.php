<?php

namespace App\Modulos\ReservaVehiculo;

use Illuminate\Database\Eloquent\Model;

class ServicioYVehiculo extends Model
{
    protected $table = 'servicios_y_vehiculos';

    protected $servicio_id;
    protected $patente;
    protected $precio;

    protected $fillable = [
        'servicio_id',
        'patente',
        'precio',
    ];

    /* Relaciones */

    public function reserva_vehiculo(){
    	return $this->belongsTo(ReservaVehiculo::class);
    }

    public function vehiculo(){
    	return $this->belongsTo(Vehiculo::class);
    }
}
