<?php

//namespace projectodbd;
namespace App;

use Illuminate\Database\Eloquent\Model;

class Aeropuerto extends Model
{
    protected $table = 'aeropuertos';
<<<<<<< HEAD:proyectodbd/app/Aeropuerto.php
    protected $primaryKey = 'id';
    protected $filleable = [
=======

    protected $pais;
    protected $ciudad;
    protected $direccion;
    protected $nombre;

    protected $fillable = [
>>>>>>> development:proyectodbd/app/Modulos/ReservaVuelo/Aeropuerto.php
        'pais',
        'ciudad',
        'direccion',
        'nombre'
    ];
}
