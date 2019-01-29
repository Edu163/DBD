<?php

namespace App\Modules\FlightReservation;

use Illuminate\Database\Eloquent\Model;

class FlightSellDetail extends Model
{
    protected $table = 'flight_sell_details';

    protected $venta_id;    
    protected $precio;
    protected $descuento;
    protected $monto_total;
    protected $fecha;
    protected $tipo;
    protected $cantidad;

    protected $fillable = [
        'venta_id',
        'precio',
        'descuento',
        'monto_total',
        'fecha',
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
