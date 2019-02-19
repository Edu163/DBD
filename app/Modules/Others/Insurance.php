<?php

namespace App\Modules\FlightReservation;
namespace App\Modules\Others;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    protected $table = 'insurances';

    protected $flight_id;
    protected $medicalService;
    protected $service2;
    protected $service3;
    

    protected $fillable = [
        'flight_id',
        'medicalService',
        'service2',
        'service3',
    ];

    /* Relaciones */
    public function flight(){
    	return $this->belongsTo(Flight::class);
    }
}
