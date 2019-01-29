<?php

namespace App\Modules\FlightReservation;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $table = 'flights';

    protected $detalle_venta_vuelo_id;
    protected $precio;
    protected $duracion_vuelo;

    protected $fillable = [
        'detalle_venta_vuelo_id',
        'precio',
        'duracion_vuelo'
    ];

    public function flightDetail()
    {
        return $this->hasMany(FlightDetail::class);
    }
}
