<?php

namespace App\Modulos\ReservaAuto;

use Illuminate\Database\Eloquent\Model;

class CalendarioVehiculo extends Model
{
    protected $table = 'calendarios_vehiculos';

    protected $ano;
    protected $mes;
    protected $dia;

    protected $fillable = [
        'año',
        'mes',
        'dia',
    ];

    /* Relaciones */

    public function automovil()
    {
      return $this->hasMany(Automovil::class);
    }
}
