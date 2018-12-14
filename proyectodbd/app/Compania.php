<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Avion;
class Compania extends Model
{
    //
    protected $table = 'companias';
	public $timestamps = false;
    protected $filleable = [
        'direccion',
        'nombre',
    ];
    public function companias()
    {
        return $this->hasMany(Avion::class);
    }
}
