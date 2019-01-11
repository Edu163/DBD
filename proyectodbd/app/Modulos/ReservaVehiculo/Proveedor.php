<?php

namespace App\Modulos\ReservaVehiculo;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';

    protected $politica_combustible;
    protected $calificacion;
    protected $kilometraje;
    protected $documentacion_necesaria;
    protected $franquicia_daños;
    protected $deposito_seguridad;

    protected $fillable = [
        'politica_combustible',
        'calificacion',
        'kilometraje',
        'documentacion_necesaria',
        'franquicia_daños',
        'deposito_seguridad',
    ];

    /* Relaciones */

    public function vehiculo(){
    	return $this->hasMany(Vehiculo::class);
    }
}
