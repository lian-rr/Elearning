<?php

namespace App\Http\Controllers;

use App\Model\Usuario;
use App\Model\UsuarioDAO;
use App\Model\UsuarioRol;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Return all users
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all(){
        return Usuario::all();
    }

    /**
     * Return a single user
     * @param $id
     * @return mixed
     */
    public function find($id){
        return Usuario::find($id);
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
}
