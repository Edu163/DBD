<?php

namespace App\Modulos\ReservaAuto;

use Illuminate\Database\Eloquent\Model;

class ServicioProveedor extends Model
{
    protected $table = 'servicios_proveedores';

    protected $id_servicio;
    protected $id_proveedor;

    protected $fillable = [
        'id_servicio',
        'id_proveedor',
    ];

    /* Relaciones */

    public function servicio_de_vehiculo(){
    	return $this->belongsTo(ServicioDeVehiculo::class);
    }

    public function proveedor(){
    	return $this->belongsTo(Proveedor::class);
    }
}
