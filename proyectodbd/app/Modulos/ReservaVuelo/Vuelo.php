<?php

namespace App\Modulos\ReservaVuelo;

use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    protected $table = 'vuelos';

    protected $id_detalle_venta_vuelo;
    protected $precio;
    protected $duracion_vuelo;

    protected $fillable = [
    	'id_detalle_venta_vuelo',
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
