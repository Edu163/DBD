<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $nombre;
    protected $apellido;
    protected $email;
    protected $password;
    protected $acceso;
    protected $n_documento;
    protected $tipo_documento;
    protected $pais;
    protected $puntos;
    protected $millas;
    protected $millas_elite;
    protected $telefono;
    protected $categoria;
    protected $fecha_nac;

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'password',
        'acceso',
        'n_documento',
        'tipo_documento',
        'pais',
        'puntos',
        'millas',
        'millas_elite',
        'telefono',
        'categoria',
        'fecha_nac',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /* Relaciones */

    public function venta(){
    	return $this->hasMany(Venta::class);
    }

    public function check_in(){
    	return $this->hasMany(CheckIn::class);
    }
}
