<?php

namespace App\Modulos\ReservaVuelo;

use Illuminate\Database\Eloquent\Model;

class DetalleVuelo extends Model
{
    protected $table = 'detalles_vuelos';

    protected $id_avion;
    protected $id_vuelo;
    protected $fecha_despegue;
    protected $fecha_aterrizaje;

    protected $filleable = [
        'id_avion',
        'id_vuelo',
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
