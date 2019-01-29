<?php

namespace App\Modules\HousingReservation;

use Illuminate\Database\Eloquent\Model;

class HotelReservation extends Model
{
    protected $table = 'hotel_reservations';
	
	protected $venta_id;
    protected $precio;
    protected $fecha;
    protected $cantidad;
    protected $monto_total;
    protected $descuento;

    protected $fillable = [
    	'venta_id',
    	'precio',
    	'fecha',
    	'cantidad',
    	'monto_total',
    	'descuento'
	];
	
	/* Relaciones */

	public function hotelReservationDetail(){
    	return $this->hasMany(HotelReservationDetail::class);
	}
	
	public function sell()
    {
      return $this->belongsTo(Sell::class);
    }
}
