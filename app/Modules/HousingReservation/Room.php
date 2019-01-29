<?php

namespace App\Modules\HousingReservation;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
	
	protected $alojamiento_privado_id;
    protected $piso;
    protected $numero;
    protected $camas;

    protected $fillable = [
    	'alojamiento_privado_id',
    	'piso',
    	'numero',
    	'camas'
	];
	
	/* Relaciones */

	public function privateHousing(){
    	return $this->belongsTo(PrivateHousing::class);
    }
}
