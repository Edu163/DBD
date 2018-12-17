<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalendarioAlojamiento extends Model
{
    protected $table = 'calendarios_alojamientos';
    protected $primaryKey = 'id';
    protected $filleable = [
    	'id',
    	'año',
    	'mes',
    	'dia'
    ];
}
