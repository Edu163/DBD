<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';

    protected $id_user;
    protected $monto_total;
    protected $fecha;
    protected $impuesto;
    protected $tipo_comprobante;
    protected $metodo_pago;
    protected $n_cuotas;
    protected $descuento;

    protected $fillable = [
        'id_user',
        'monto_total',
        'fecha',
        'impuesto',
        'tipo_comprobante',
        'metodo_pago',
        'n_cuotas',
        'descuento',
    ];

     /* Relaciones */

    public function user()
    {
      return $this->belongsTo(User::class);
    }
    
    public function reservaAuto()
    {
      return $this->hasMany(ReservaAuto::class);
    }

    public function detalle_venta_vuelo(){
    	return $this->hasMany(DetalleVentaVuelo::class);
    }

    public function reserva_vuelo(){
    	return $this->hasMany(ReservaVuelo::class);
    }

    public function paquete(){
    	return $this->hasMany(Paquete::class);
    }
}
