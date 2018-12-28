<?php

namespace App\Modulos\ReservaVuelo;

use Illuminate\Database\Eloquent\Model;

class DetalleVentaVuelo extends Model
{

    protected $table = 'detalles_ventas_vuelos';

    protected $precio;
    protected $descuento;
    protected $monto_total;
    protected $fecha;
    protected $tipo;
    protected $cantidad;

    protected $fillable = [
<<<<<<< HEAD
=======

>>>>>>> guillermo
        'id_venta',
        'precio',
        'descuento',
        'monto_total',
        'fecha',
        'tipo',
        'cantidad',
    ];

    /* Relaciones */

    public function vuelo()
    {
        return $this->hasMany(Vuelo::class);
    }

    public function venta()
    {
        return $this->belongsTo(Venta::class);
    }
}
