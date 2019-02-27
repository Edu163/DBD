<?php

namespace App\Modules\FlightReservation;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    public $escala = [];
    protected $table = 'flights';

    protected $fillable = [
        'flight_sell_reservation_id',
        'precio',
        'duracion_vuelo'
    ];


    public function flightDetail()
    {
        return $this->hasMany(FlightDetail::class);
    }
}
