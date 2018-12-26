<?php

namespace App\Modulos\ReservaAlojamiento;

use Illuminate\Database\Eloquent\Model;

class ReservaHotel extends Model
{
	protected $table = 'reservas_hoteles';
	
	protected $id_venta;
    protected $precio;
    protected $fecha;
    protected $cantidad;
    protected $monto_total;
    protected $descuento;

    protected $fillable = [
    	'id_venta',
    	'precio',
    	'fecha',
    	'cantidad',
    	'monto_total',
    	'descuento'
	];
	
	/* Relaciones */

	public function detalle_reserva_hotel(){
    	return $this->hasMany(DetalleReservaHotel::class);
	}
	
	public function venta()
    {
      return $this->belongsTo(Venta::class);
    }
}