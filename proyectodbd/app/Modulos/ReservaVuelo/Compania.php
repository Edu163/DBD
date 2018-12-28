<?php

namespace App\Modulos\ReservaVuelo;

use Illuminate\Database\Eloquent\Model;

class Compania extends Model
{
    protected $table = 'companias';

<<<<<<< HEAD
    //protected $direccion;
    //protected $nombre;
=======
    protected $nombre;
    protected $direccion;
>>>>>>> guillermo

    protected $fillable = [
        'nombre',
        'direccion'
        
    ];

    /* Relaciones */

    public function avion()
    {
        return $this->hasMany(Avion::class);
    }
}
