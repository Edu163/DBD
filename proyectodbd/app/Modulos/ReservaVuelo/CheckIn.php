<?php

namespace App\Modulos\ReservaVuelo;

use Illuminate\Database\Eloquent\Model;

class CheckIn extends Model
{
    protected $table = 'checks_in';

    protected $id_asiento;
    protected $id_user;
    protected $fecha;
    protected $estado;

    protected $filleable = [
        'id_asiento',
        'id_user',
        'fecha',
        'estado'
    ];

    /* Relaciones */

	public function user(){
    	return $this->belongsTo(User::class);
	}
    
    public function asiento(){
    	return $this->belongsTo(Asiento::class);
	}
}
