<?php

namespace App\Modulos\ReservaVuelo;

use Illuminate\Database\Eloquent\Model;

class ReservaVuelo extends Model
{
    protected $table = 'reserva_vuelos';
    protected $fillable = [
        'id',
        'vuelo_id',
        'fecha',
        'tipo',
        'precio',
    ];

    public function vuelo()
    {
        return $this->belongsTo(Vuelo::class);
    }
}
