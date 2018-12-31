<?php

namespace App\Modulos\ReservaVuelo;

use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    protected $table = 'vuelos';

    protected $detalle_venta_vuelo_id;
    protected $precio;
    protected $duracion_vuelo;

    protected $fillable = [
    	'detalle_venta_vuelo_id',
        'precio',
        'duracion_vuelo'
    ];

    public function detalleVuelo()
    {
        return $this->hasMany(DetalleVuelo::class);
    }
    public function detalleVentaVuelo()
    {
        return $this->belongsTo(DetalleVentaVuelo::class);
    }
}
