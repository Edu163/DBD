<?php

namespace App\Modulos\ReservaVuelo;

use Illuminate\Database\Eloquent\Model;

class Avion extends Model
{

    protected $table = 'aviones';

    protected $compania_id;
    protected $modelo;

    protected $fillable = [
        'compania_id',
        'modelo',
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
