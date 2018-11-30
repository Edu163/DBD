<?php

namespace projectodbd\Http\Controllers\Auth;

use projectodbd\User;
use projectodbd\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {   
        return Validator::make($data, [
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \projectodbd\User
     */
    protected function create(array $data)

    {
        return User::create([
            'nombre' => request('nombre'),
            'apellido' => request('apellido'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'acceso' => 'usuario',
            'n_documento' => null,
            'tipo_documento' => null,
            'pais' => request('pais'),
            'puntos' => null,
            'millas' => null,
            'millas_elite' => null,
            'telefono' => request('telefono'),
            'categoria' => 'normal',
            'fecha_nac' => request('fecha'),
        ]);
    }
}
