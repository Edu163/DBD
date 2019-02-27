<?php

namespace App\Modules\VehicleReservation;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $table = 'zones';

    protected $nombre;
    protected $direccion;
    protected $coordenadas;

    protected $fillable = [
        'nombre',
        'direccion',
        'coordenadas',
    ];

    /* Relaciones */

    public function vehicleReservation(){
    	return $this->hasMany(VehicleReservation::class);
    }
    public function city(){
    	return $this->belongsTo(City::class);
    }
}
