<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Model\Historial;
use App\Model\Usuario;
use App\UsuarioRol;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Validate the fields in the request.
     * @param Request $request
     */
    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required',
            'password' => 'required',
            'ip' => 'required',
            'browser' => 'required',
            'os' => 'required'
        ]);
    }

    /**
     * Register the history
     * @param Request $request
     * @param $user
     */
    protected function authenticated(Request $request, $user)
    {
        $log = new Historial;
        $log->usuario = $user->id_usuario;
        $log->ip = $request->ip;
        $log->navegador = $request->browser;
        $log->os = $request->os;

        $log->save();
    }
}