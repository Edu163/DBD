<?php

namespace App\Modulos\ReservaVehiculo;

use Illuminate\Database\Eloquent\Model;

class ServicioProveedor extends Model
{
    protected $table = 'servicios_proveedores';

    protected $servicio_id;
    protected $proveedor_id;

    protected $fillable = [
        'servicio_id',
        'proveedor_id',
    ];

    /* Relaciones */

    public function servicio_de_vehiculo(){
    	return $this->belongsTo(ServicioDeVehiculo::class);
    }

    public function proveedor(){
    	return $this->belongsTo(Proveedor::class);
    }
}
