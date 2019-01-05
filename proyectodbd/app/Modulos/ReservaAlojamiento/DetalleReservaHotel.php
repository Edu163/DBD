<?php

namespace App\Modulos\ReservaAlojamiento;

use Illuminate\Database\Eloquent\Model;

class DetalleReservaHotel extends Model
{
	protected $table = 'detalles_reservas_hoteles';
	
	protected $reserva_hotel_id;
    protected $habitacion_hotel_id;
    protected $alojamiento_privado_id;
    protected $fecha_ingreso;
    protected $fecha_egreso;
	protected $precio;
	protected $tipo;
	

    protected $fillable = [
	    'reserva_hotel_id',
	    'habitacion_hotel_id',
	    'alojamiento_privado_id',
	    'fecha_ingreso',
	    'fecha_egreso',
	    'precio',
	    'tipo',
	];
	
	/* Relaciones */
	
	public function reserva_hotel(){
    	return $this->belongsTo(ReservaHotel::class);
	}

	public function habitacion_hotel(){
    	return $this->belongsTo(HabitacionHotel::class);
	}

	public function alojamiento_privado(){
    	return $this->belongsTo(AlojamientoPrivado::class);
    }
}