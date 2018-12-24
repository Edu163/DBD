<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservaHotel extends Model
{
    protected $table = 'reservas_hoteles';
    protected $primaryKey = 'id';
    protected $filleable = [
    	'id',
    	'id_venta',
    	'precio',
    	'fecha',
    	'cantidad',
    	'monto_total',
    	'descuento'
    ];
}