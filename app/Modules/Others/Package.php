<?php

namespace App\Modules\Others;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'packages';

    protected $flight_id;
    protected $hotel_id;
    protected $vehicle_id;
    protected $fecha_inicio;
    protected $fecha_fin;

    protected $fillable = [
        'flight_id',
        'hotel_id',
        'vehicle_id',
        'fecha_inicio',
        'fecha_fin'
    ];

    public function flight(){
    	return $this->belongsTo(Flight::class);
    }

    public function hotel(){
    	return $this->belongsTo(Hotel::class);
    }

    public function vehicle(){
    	return $this->belongsTo(Vehicle::class);
    }
}
