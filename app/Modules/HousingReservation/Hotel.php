<?php

namespace App\Modules\HousingReservation;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotels';
	
	protected $nombre;
    protected $pais;
    protected $direccion;
    protected $estrellas;
    protected $valoracion;
    protected $capacidad;

    protected $fillable = [
    	'nombre',
    	'ciudad_id',
        'pais',
    	'ciudad',
    	'direccion',
    	'estrellas',
    	'valoracion',
    	'capacidad'
	];
	
	/* Relaciones */

	public function hotelRoom(){
    	return $this->hasMany(HotelRoom::class);
	}

	public function city(){
    	return $this->belongsTo(Cities::class);
    }
}