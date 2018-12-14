<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Avion;
class Asiento extends Model
{
    //
    protected $table = 'asientos';
    public $timestamps = false;
    protected $filleable = [
        'numero',
        'letra',
        'tipo',
        'clase',
        'disponible',
        'id_avion',
    ];
    public function avion()
    {
        return $this->belongsTo(Avion::class);
    }
}
