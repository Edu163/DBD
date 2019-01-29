<?php

namespace App\Modules\FlightReservation;

use Illuminate\Database\Eloquent\Model;

class FlightDetail extends Model
{
    protected $table = 'flight_details';

    protected $avion_id;
    protected $vuelo_id;
    protected $aeropuerto_id;
    protected $origen_id;
    protected $destino_id;
    protected $fecha_despegue;
    protected $fecha_aterrizaje;
    protected $precio;

    protected $fillable = [
        'avion_id',
        'vuelo_id',
        'aeropuerto_id',
        'origen_id',
        'destino_id',
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
        return $this->belongsTo(Flight::class);
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
