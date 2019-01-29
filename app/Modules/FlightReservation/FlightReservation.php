<?php

namespace App\Modules\FlightReservation;

use Illuminate\Database\Eloquent\Model;

class FlightReservation extends Model
{
    protected $table = 'flight_reservations';
    protected $fillable = [
        'id',
        'vuelo_id',
        'fecha',
        'tipo',
        'precio',
    ];

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }
}
