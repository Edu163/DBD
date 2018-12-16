<?php

namespace App\Modulos\ReservaAuto;

use Illuminate\Database\Eloquent\Model;


class Automovil extends Model
{
    protected $table = 'automoviles';

    protected $patente;
    protected $id_calendario_vehiculo;
    protected $id_proveedor;
    protected $id_zona;
    protected $marca;
    protected $tipo;
    protected $gamma;
    protected $transmision;
    protected $combustible;
    protected $n_pasajeros;
    protected $equipaje_g;
    protected $equipaje_p;
    protected $n_puertas;
    protected $n_kilometraje;
    protected $precio_hora;
    protected $aire_acondicionado;

    protected $fillable = [
        'patente',
        'id_calendario_vehiculo',
        'id_proveedor',
        'id_zona',
        'marca',
        'tipo',
        'gamma',
        'transmision',
        'combustible',
        'n_pasajeros',
        'equipaje_g',
        'equipaje_p',
        'n_puertas',
        'n_kilometraje',
        'precio_hora',
        'aire_acondicionado',
    ];

    /* Relaciones */

    public function calendario_vehiculo(){
    	return $this->belongsTo(CalendarioVehiculo::class);
    }

    public function zona(){
    	return $this->belongsTo(Zona::class);
    }

    public function proveedor(){
    	return $this->belongsTo(Proveedor::class);
    }

    public function servicio_y_vehiculo(){
    	return $this->hasMany(ServicioYVehiculo::class);
    }

    public function detalle_reserva_auto(){
    	return $this->hasMany(DetalleReservaAuto::class);
    }
}
