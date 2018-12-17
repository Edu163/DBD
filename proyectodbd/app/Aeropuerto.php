<?php

//namespace projectodbd;
namespace App;

use Illuminate\Database\Eloquent\Model;

class Aeropuerto extends Model
{
    protected $table = 'aeropuertos';
    protected $primaryKey = 'id';
    protected $filleable = [
        'pais',
        'ciudad',
        'direccion',
        'nombre'
    ];
}
