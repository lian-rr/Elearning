<?php

namespace App\Http\Controllers;

use App\Model\Usuario;
use App\Model\UsuarioDAO;
use App\Model\UsuarioRol;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function new(){
        return view('user.new');
    }

    /**
     * Return all users
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all(){
        return view('user.users',['users' => Usuario::all()]);
    }

    /**
     * Return a single user
     * @param $id
     * @return mixed
     */
    public function find($id){
        $user = Usuario::find($id);

        return view('user.update',['user' => $user, 'role' => $user->role]);
    }

    /**
     * Return the log for a particular user
     * @param $id
     * @return mixed
     */
    public function history($id){
        return Usuario::find($id)->historial;
    }

    /**
     * Return the role of the user
     * @param $id
     * @return mixed
     */
    public function rol($id){
        return UsuarioRol::find($id)->role;
    }



    public function addUser(Request $request){

        dd($request->all());

        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        return redirect(route('/home'));
    }


    protected function validator(array $data){

    }

    protected function create(array $data){

    }


    public function update(Request $request){
        dd($request->all());
    }
}
