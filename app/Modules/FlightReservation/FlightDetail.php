<?php

namespace App\Modules\FlightReservation;

use Illuminate\Database\Eloquent\Model;

class FlightDetail extends Model
{
    protected $table = 'flight_details';

    // protected $avion_id;
    protected $flight_id;
    protected $airport_id;
    protected $origin_id;
    protected $destiny_id;
    protected $fecha_despegue;
    protected $fecha_aterrizaje;
    protected $precio;

    protected $fillable = [
        // 'avion_id',
        'flight_id',
        'airport_id',
        'origin_id',
        'destiny_id',
        'fecha_despegue',
        'fecha_aterrizaje',
        'precio',
    ];

    /* Relaciones */

    public function airplane()
    {
        return $this->belongsTo(Airplane::class);
    }

    public function flight()
    {
        return $this->belongsTo(Flight::class, flight_id);
    }

    // public function origen_destino()
    // {
    //     return $this->hasMany(OrigenDestino::class);
    // }

    public function origin()
    {
        return $this->belongsTo(Airport::class, 'origen_id');
    }
    public function destiny()
    {
        return $this->belongsTo(Airport::class, 'destino_id');
    }
}
