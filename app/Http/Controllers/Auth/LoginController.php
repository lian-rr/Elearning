<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

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


//    public function login(){
//
//        $rules = array(
//            'email' => 'required|email',
//            'password' => 'required|alphaNum|min:3'
//        );
//
//        $validator = Validator::make(Input::all(), $rules);
//
//
//        if($validator->fails()){
//            echo "validation error";
//            return Redirect::to('login')
//                ->withErrors($validator) // send back all errors to the login form
//                ->withInput(Input::except('password')); //send the input except the password.
//        }
//        else{
//            $userdata = array(
//                'email'       => Input::get('email'),
//                'contrasena'  => bcrypt(Input::get('password'));
//            );
//
//            dd($userdata);
//
//            // attempt to do the login
//            if (Auth::attempt($userdata)) {
//
//                // validation successful!
//                // redirect them to the secure section or whatever
//                // return Redirect::to('secure');
//                // for now we'll just echo success (even though echoing in a controller is bad)
//                echo 'SUCCESS!';
//
//            } else {
//
//                // validation not successful, send back to form
//                echo 'FAILURE';
////                return Redirect::to('login');
//
//            }
//        }
//
//
//
//    }
}
