<?php

namespace App\Http\Controllers;

use App\Model\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function list(){
        return Rol::all();
    }

    public function find($id){
        return Rol::find($id);
    }


}
