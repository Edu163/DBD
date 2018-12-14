<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DetalleVuelo;
use App\DetalleVentaVuelo;
class Vuelo extends Model
{
    //
    protected $table = 'vuelos';
	public $timestamps = true;
    protected $filleable = [
    	'id_detalle_venta_vuelo',
        'precio',
    ];

    public function detalleVuelo()
    {
        return $this->hasMany(DetalleVuelo::class);
    }
    public function detalleVentaVuelo()
    {
        return $this->belongsTo(DetalleVentaVuelo::class);
    }
}
