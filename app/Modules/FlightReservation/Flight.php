<?php

namespace App\Modules\FlightReservation;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $table = 'flights';

    protected $flight_sell_reservation_id;
    protected $precio;
    protected $duracion_vuelo;

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
