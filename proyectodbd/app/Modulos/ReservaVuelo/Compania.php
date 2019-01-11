<?php

namespace App\Modulos\ReservaVuelo;

use Illuminate\Database\Eloquent\Model;

class Compania extends Model
{
    protected $table = 'companias';

    protected $nombre;
    protected $direccion;

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
