<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservaHotel extends Model
{
    protected $table = 'reservas_hoteles';

    protected $filleable = [
    	'id_venta',
    	'precio',
    	'fecha',
    	'cantidad',
    	'monto_total',
    	'descuento'
	];
	
	public function venta()
    {
      return $this->belongsTo(Venta::class);
    }
}