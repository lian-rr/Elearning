<?php

namespace App\Http\Controllers;

use App\Model\Usuario;
use App\Model\UsuarioDAO;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function all(){
        return Usuario::all();
    }

    public function find($id){
        return Usuario::find($id);
    }
}
