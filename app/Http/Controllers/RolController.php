<?php

namespace App\Http\Controllers;

use App\Model\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * List all roles
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function list(){
        return Rol::all();
    }

    /**
     * Return a particular role information
     * @param $id
     * @return mixed
     */
    public function find($id){
        return Rol::find($id);
    }

    /**
     * Return all users of a role
     * @param $id
     * @return mixed
     */
    public function users($id){
        return Rol::find($id)->users;
    }

}
