<?php

namespace App\Modulos\ReservaVuelo;

use Illuminate\Database\Eloquent\Model;

class DetalleVuelo extends Model
{
    protected $table = 'detalles_vuelos';

    protected $avion_id;
    protected $vuelo_id;
    protected $fecha_despegue;
    protected $fecha_aterrizaje;

    protected $fillable = [
        'avion_id',
        'vuelo_id',
        'fecha_despegue',
        'fecha_aterrizaje',
    ];

    /* Relaciones */

    public function avion()
    {
        return $this->belongsTo(Avion::class);
    }

    public function calendario_vuelo()
    {
        return $this->hasMany(CalendarioVuelo::class);
    }

    public function vuelo()
    {
        return $this->belongsTo(Vuelo::class);
    }

    public function origen_destino()
    {
        return $this->hasMany(OrigenDestino::class);
    }
}
