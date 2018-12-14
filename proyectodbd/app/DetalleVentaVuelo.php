<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Vuelo;
class DetalleVentaVuelo extends Model
{
    //
    protected $table = 'detalles_ventas_vuelos';
	public $timestamps = false;
    protected $filleable = [
        'precio',
        'descuento',
        'monto_total',
        'fecha',
        'tipo',
        'cantidad',
    ];
    public function vuelo()
    {
        return $this->hasMany(Vuelo::class);
    }
}
