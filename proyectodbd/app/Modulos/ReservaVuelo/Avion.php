<?php

namespace App\Modulos\ReservaVuelo;

use Illuminate\Database\Eloquent\Model;

class Avion extends Model
{

    protected $table = 'aviones';

    protected $color;
    protected $modelo;
    protected $motores;
    protected $compania_id;

    protected $filleable = [
        'color',
        'modelo',
        'motores',
        'compania_id',
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
