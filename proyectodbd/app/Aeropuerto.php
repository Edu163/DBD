<?php

namespace projectodbd;

use Illuminate\Database\Eloquent\Model;

class Aeropuerto extends Model
{
    protected $table 'aeropuerto';
    protected $timestamps = false;
    protected $filleable[
    	'pais','ciudad','direccion','nombre'
    ];
}
