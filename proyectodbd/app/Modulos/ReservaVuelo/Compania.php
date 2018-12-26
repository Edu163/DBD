<?php

namespace App\Modulos\ReservaVuelo;

use Illuminate\Database\Eloquent\Model;

class Compania extends Model
{
    protected $table = 'companias';

    //protected $direccion;
    //protected $nombre;

    protected $fillable = [
<<<<<<< HEAD
        'direccion',
=======
>>>>>>> development
        'nombre',
        'direccion'
        
    ];

    /* Relaciones */

    public function avion()
    {
        return $this->hasMany(Avion::class);
    }
}
