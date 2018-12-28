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

    protected $fillable = [
        'avion_id',
        'id_vuelo',
        'aeropuerto_id',
        'id_origen',
        'id_destino',
        'fecha_despegue',
        'fecha_aterrizaje',
        'precio',
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
    /*public function aeropuerto()
    {
        return $this->belongsTo(Aeropuerto::class);
    }*/
    public function origen()
    {
        return $this->belongsTo(Aeropuerto::class, 'id_origen');
    }
    public function destino()
    {
        return $this->belongsTo(Aeropuerto::class, 'id_destino');
    }
    public function asiento()
    {
        return $this->hasMany(Asiento::class);
    }
}
