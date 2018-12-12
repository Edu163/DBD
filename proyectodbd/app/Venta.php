<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';

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
  /*
  public function reservaAuto()
  {
    return $this->hasMany(ReservaAuto::class);
  }
  */
}
