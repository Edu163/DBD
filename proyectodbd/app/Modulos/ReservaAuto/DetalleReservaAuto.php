<?php

namespace App\Modulos\ReservaAuto;

use Illuminate\Database\Eloquent\Model;

class DetalleReservaAuto extends Model
{
    protected $table = 'detalles_reservas_autos';

    protected $id_res_auto;
    protected $patente;
    protected $fecha_retiro;
    protected $fecha_regreso;
    protected $precio_reserva;
    protected $descuento;
    protected $cantidad;

    protected $fillable = [
        'id_res_auto',
        'patente',
        'fecha_retiro',
        'fecha_regreso',
        'precio_reserva',
        'descuento',
        'cantidad',
    ];

    /* Relaciones */

    public function reserva_auto(){
    	return $this->belongsTo(ReservaAuto::class);
    }

    public function automovil(){
    	return $this->belongsTo(Automovil::class);
    }
}