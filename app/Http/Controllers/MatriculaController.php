<?php

namespace App\Http\Controllers;

use App\Model\Matricula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatriculaController extends Controller
{

    public function enrolledUsers($id)
    {
        $users = DB::table('matricula')
            ->where('curso','=',$id)
            ->join('usuario', 'matricula.usuario', '=', 'usuario.id_usuario')
            ->select('matricula.periodo','matricula.ano','usuario.id_usuario',
                'usuario.nombre','usuario.genero', 'usuario.pais', 'usuario.lenguaje')
            ->get();

        return view('enrolled', [
            'course' => $id,
            'users' => $users,
        ]);
    }

    public function allUsers($course)
    {
        return view('', []);
    }

    public function enrol($user)
    {

    }


}
