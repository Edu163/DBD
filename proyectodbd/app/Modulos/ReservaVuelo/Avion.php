<?php

namespace App\Modulos\ReservaVuelo;

use Illuminate\Database\Eloquent\Model;

class Avion extends Model
{

    protected $table = 'aviones';

    protected $color;
    protected $modelo;
    protected $motores;
    protected $id_compania;

    protected $filleable = [
        'color',
        'modelo',
        'motores',
        'id_compania',
    ];

    /* Relaciones */

    public function compania()
    {
        return $this->belongsTo(Compania::class);
    }
    public function asiento()
    {
        return $this->hasMany(Asiento::class);
    }

}
