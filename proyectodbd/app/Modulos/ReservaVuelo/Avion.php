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

    protected $fillable = [
<<<<<<< HEAD
=======
        'color',
>>>>>>> guillermo
        'modelo',
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
