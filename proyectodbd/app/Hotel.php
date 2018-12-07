<?php

namespace projectodbd;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    //
    protected $table = 'hotel';
    protected $primaryKey = 'id_hotel';
    public $timestamp = false; 

    protected fillable = [
    	'id_hotel',
       	'nombre',
     	'pais',
       	'direccion',
       	'estrellas',
        'valoracion',
        'capacidad',
    ];
}
