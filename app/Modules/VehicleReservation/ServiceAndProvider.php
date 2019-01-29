<?php

namespace App\Modules\VehicleReservation;

use Illuminate\Database\Eloquent\Model;

class ServiceAndProvider extends Model
{
    protected $table = 'service_and_providers';

    protected $servicio_id;
    protected $proveedor_id;

    protected $fillable = [
        'servicio_id',
        'proveedor_id',
    ];

    /* Relaciones */

    public function vehicleService(){
    	return $this->belongsTo(VehicleService::class);
    }

    public function vehicleProvider(){
    	return $this->belongsTo(VehicleProvider::class);
    }
}
