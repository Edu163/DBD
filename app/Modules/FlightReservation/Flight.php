<?php

namespace App\Modules\FlightReservation;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{

    protected $table = 'flights';

    protected $origin_id;
    protected $destiny_id;
    protected $tramo1_id;
    protected $tramo2_id;
    protected $escalas;
    protected $fecha_despegue;
    protected $fecha_aterrizaje;
    protected $precio;

    protected $fillable = [
        'origin_id',
        'destiny_id',
        'tramo1_id',
        'tramo2_id',
        'escalas',
        'fecha_despegue',
        'fecha_aterrizaje',
        'precio',
    ];


    public function origin()
    {
        return $this->belongsTo(Airport::class, 'origin_id');
    }
    public function destiny()
    {
        return $this->belongsTo(Airport::class, 'destiny_id');
    }
    public function getTramo1()
    {
        return $this->belongsTo(FlightDetail::class, 'tramo1_id');
    }
    public function getTramo2()
    {
        return $this->belongsTo(FlightDetail::class, 'tramo2_id');
    }
    public static function buscarVuelos($params)
    {

        $fechaPartida = Carbon::createFromFormat('Y-m-d', $params['fechaida']);

        $vuelos = static::where('origin_id', '=', $params['origen'])
            ->whereDate('fecha_despegue', '=', $fechaPartida->format('Y-m-d'))
            ->where('destiny_id', '=', $params['destino'])
            ->get();

        return $vuelos;
    }
}
