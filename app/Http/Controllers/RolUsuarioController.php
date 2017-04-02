<?php

namespace App\Http\Controllers;

use App\Model\UsuarioRol;
use Illuminate\Http\Request;

class RolUsuarioController extends Controller
{
    /**
     * Update the  user role.
     * @param Request $request
     */
    public function updateRole(Request $request){
        $usuario_role = UsuarioRol::find($request->id);
        $usuario_role->rol = $request->rol;
        $usuario_role->save();
    }
}
