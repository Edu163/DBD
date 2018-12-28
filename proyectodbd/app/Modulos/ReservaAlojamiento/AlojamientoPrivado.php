<?php

namespace App\Modulos\ReservaAlojamiento;

use Illuminate\Database\Eloquent\Model;

class AlojamientoPrivado extends Model
{
	protected $table = 'alojamientos_privados';
	
	protected $id_calendario_alojamiento;
    protected $capacidad;
    protected $direccion;
    protected $nombre;
    protected $estrella;
    protected $valoracion;
    protected $pais;

    protected $fillable = [
	    'id_calendario_alojamiento',
	    'capacidad',
	    'direccion',
	    'nombre',
	    'estrella',
	    'valoracion',
	    'pais'
	];
	
	/* Relaciones */

	public function detalle_reserva_hotel(){
    	return $this->hasMany(DetalleReservaHotel::class);
	}

	public function habitacion(){
    	return $this->hasMany(Habitacion::class);
	}

	public function alojamiento_servicio(){
    	return $this->hasMany(AlojamientoServicio::class);
	}
	
	public function calendario_alojamiento(){
    	return $this->belongsTo(CalendarioAlojamiento::class);
    }
}
