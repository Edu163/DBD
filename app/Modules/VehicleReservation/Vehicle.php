<?php

namespace App\Modules\VehicleReservation;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicles';

    protected $patente;
    protected $vehicle_calendary_id;
    protected $vehicle_provider_id;
    protected $zone_id;
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
        'vehicle_calendary_id',
        'vehicle_provider_id',
        'zone_id',
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

    public function vehicleCalendary(){
    	return $this->belongsTo(VehicleCalendary::class);
    }

    public function zone(){
    	return $this->belongsTo(Zone::class);
    }

    public function provider(){
    	return $this->belongsTo(Provider::class);
    }

    public function serviceAndVehicle(){
    	return $this->hasMany(ServiceAndVehicle::class);
    }

    public function vehicleReservationDetail(){
    	return $this->hasMany(VehicleReservationDetail::class);
    }
}
