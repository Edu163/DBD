<?php

namespace App\Modulos\ReservaVuelo;

use Illuminate\Database\Eloquent\Model;

class CheckIn extends Model
{
    protected $table = 'checks_in';

    protected $asiento_id;
    protected $user_id;
    protected $fecha;
    protected $estado;

    protected $fillable = [
        'asiento_id',
        'user_id',
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
