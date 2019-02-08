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
    protected $tipo;
    protected $cantidad;

    protected $fillable = [
        'sell_id',
        'precio',
        'descuento',
        'monto_total',
        'tipo',
        'cantidad',
    ];

    /* Relaciones */

    public function flight()
    {
        return $this->hasMany(Flight::class);
    }

    public function sell()
    {
        return $this->belongsTo(Sell::class);
    }
}
