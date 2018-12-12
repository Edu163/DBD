<?php

<<<<<<< HEAD
namespace projectodbd;
=======
namespace App;
>>>>>>> development

use Illuminate\Database\Eloquent\Model;

class Aeropuerto extends Model
{
<<<<<<< HEAD
    protected $table 'aeropuerto';
    protected $timestamps = false;
    protected $filleable[
    	'pais','ciudad','direccion','nombre'
=======
    protected $table = 'aeropuertos';

    protected $filleable = [
        'pais',
        'ciudad',
        'direccion',
        'nombre'
>>>>>>> development
    ];
}
