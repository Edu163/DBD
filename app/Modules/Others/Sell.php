<?php

namespace App\Modules\Others;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Sell extends Model
{
    protected $table = 'sells';

    protected $user_id;
    protected $monto_total;
    protected $fecha;
    protected $impuesto;
    protected $tipo_comprobante;
    protected $metodo_pago;
    protected $n_cuotas;
    protected $descuento;

    protected $fillable = [
        'user_id',
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
    
    public function vehicleReservation()
    {
      return $this->hasMany(VehicleReservation::class);
    }

    public function flightSellDetail(){
    	return $this->hasMany(FlightSellDetail::class);
    }

    public function flightReservation(){
    	return $this->hasMany(FlightReservation::class);
    }

    public function package(){
    	return $this->hasMany(Package::class);
    }
}
