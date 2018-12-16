<?php

namespace App;
use App\Avion;
use App\Aeropuerto;
use App\Vuelo;
use Illuminate\Database\Eloquent\Model;

class DetalleVuelo extends Model
{
    //
    protected $table = 'detalles_vuelos';
	public $timestamps = false;
    protected $filleable = [
        'id_avion',
        'id_vuelo',
        'fecha_despegue',
        'fecha_aterrizaje',
    ];
    public function avion()
    {
        return $this->belongsTo(Avion::class);
    }
    public function aeropuerto()
    {
        return $this->hasMany(Aeropuerto::class);
    }
    public function vuelo()
    {
        return $this->belongsTo(Vuelo::class);
    }

}
