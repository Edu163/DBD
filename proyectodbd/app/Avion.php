<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Compania;
use App\Asiento;
class Avion extends Model
{
    //
    protected $table = 'aviones';
    public $timestamps = false;
    protected $filleable = [
        'color',
        'modelo',
        'motores',
        'compania_id',
    ];
    public function compania()
    {
        return $this->belongsTo(Compania::class);
    }
    public function asiento()
    {
        return $this->hasMany(Asiento::class);
    }

}
