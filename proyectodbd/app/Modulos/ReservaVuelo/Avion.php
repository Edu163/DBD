<?php

namespace App\Modulos\ReservaVuelo;

use Illuminate\Database\Eloquent\Model;

class Avion extends Model
{

    protected $table = 'aviones';

    protected $modelo;
    protected $id_compania;

    protected $fillable = [
        'modelo',
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
