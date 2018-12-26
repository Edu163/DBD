<?php

namespace App\Modulos\ReservaAlojamiento;

use Illuminate\Database\Eloquent\Model;

class DetalleReservaHotel extends Model
{
	protected $table = 'detalles_reservas_hoteles';
	
	protected $id_reserva_hotel;
    protected $id_habitacion_hotel;
    protected $id_alojamiento_privado;
    protected $fecha_ingreso;
    protected $fecha_egreso;
	protected $precio;
	protected $tipo;
	

    protected $fillable = [
	    'id_reserva_hotel',
	    'id_habitacion_hotel',
	    'id_alojamiento_privado',
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