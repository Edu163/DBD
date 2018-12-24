<?php

namespace App\Modulos\ReservaAlojamiento;

use Illuminate\Database\Eloquent\Model;

class ReservaHotel extends Model
{
<<<<<<< HEAD:proyectodbd/app/ReservaHotel.php
    protected $table = 'reservas_hoteles';
    protected $primaryKey = 'id';
=======
	protected $table = 'reservas_hoteles';
	
	protected $id_venta;
    protected $precio;
    protected $fecha;
    protected $cantidad;
    protected $monto_total;
    protected $descuento;

>>>>>>> development:proyectodbd/app/Modulos/ReservaAlojamiento/ReservaHotel.php
    protected $filleable = [
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