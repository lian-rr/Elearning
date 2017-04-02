<?php

namespace App\Http\Controllers\Auth;

use App\Model\Usuario;
use App\Model\UsuarioRol;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:usuario',
            'password' => 'required|min:3|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return Usuario
     */
    protected function create(array $data)
    {
        return Usuario::create([
            'nombre' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'genero' => $data['gender'],
            'pais' => $data['country'],
            'lenguaje' => $data['language'],
        ]);
    }

    /**
     * It's call after the user is created
     * @param Request $request
     * @param $user
     */
    protected function registered(Request $request, $user)
    {
        $usuario_rol = new UsuarioRol;
        $usuario_rol->usuario = $user->id_usuario;
        $usuario_rol->rol = 4;
        $usuario_rol->estado = true;

        $usuario_rol->save();
    }
}
