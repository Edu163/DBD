<?php

namespace App\Modules\HousingReservation;

use Illuminate\Database\Eloquent\Model;

class HousingAndService extends Model
{
    protected $table = 'housing_and_services';

    protected $servicio_alojamiento_id;
    protected $alojamiento_privado_id;

    protected $fillable = [
	    'servicio_alojamiento_id',
	    'alojamiento_privado_id',
    ];

    /* Relaciones */

    public function housingService(){
    	return $this->belongsTo(HousingService::class);
    }

    public function privateHousing(){
    	return $this->belongsTo(PrivateHousing::class);
    }
}
