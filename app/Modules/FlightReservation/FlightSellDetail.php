<?php

namespace App\Modules\FlightReservation;

use Illuminate\Database\Eloquent\Model;

class FlightSellDetail extends Model
{
    protected $table = 'flight_sell_details';

    protected $sell_id;    
    protected $precio;
    protected $descuento;
    protected $monto_total;
    protected $fecha;
    protected $tipo;
    protected $cantidad;

    protected $fillable = [
        'sell_id',
        'flight_id',
        'roundtrip_id',
        'precio',
        'descuento',
        'monto_total',
        'tipo',
        'cantidad',
    ];

    /* Relaciones */

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }
    public function roundtrip()
    {
        return $this->hasMany(RoundtripFlight::class);
    }
    public function sell()
    {
        return $this->belongsTo(Sell::class);
    }
}
