<?php

namespace App\Modules\Others;

use Illuminate\Database\Eloquent\Model;

class InsuranceReservation extends Model
{
    protected $table = 'insurance_reservations';

    protected $sell_id;
    protected $monto_total;

    protected $fillable = [
        'sell_id',
        'monto_total',
    ];

    /* Relaciones */

    public function sell(){
    	return $this->belongsTo(Sell::class);
    }
    public function insurance(){
        return $this->hasMani(Insurance::class);
    }
}