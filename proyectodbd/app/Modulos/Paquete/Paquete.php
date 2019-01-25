<?php

namespace App\Modulos\Paquete;

use App\Modulos\ReservaVuelo\Vuelo;
use Illuminate\Database\Eloquent\Model;
use App\Modulos\ReservaAlojamiento\Hotel;
use App\Modulos\ReservaVehiculo\Vehiculo;
class Paquete extends Model
{
    protected $table = 'paquetes';
    protected $fillable = [
        'id',
        'vuelo_id',
        'hotel_id',
        'vehiculo_id',
        'fecha_inicio',
        'fecha_fin',
    ];

    public function vuelo(){
    	return $this->belongsTo(Vuelo::class);
    }

    public function hotel(){
    	return $this->belongsTo(Hotel::class);
    }

    public function vehiculo(){
    	return $this->belongsTo(Vehiculo::class);
    }
}
