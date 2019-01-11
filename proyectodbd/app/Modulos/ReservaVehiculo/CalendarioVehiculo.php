<?php

namespace App\Modulos\ReservaVehiculo;

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

    public function vehiculo()
    {
      return $this->hasMany(Vehiculo::class);
    }
}
