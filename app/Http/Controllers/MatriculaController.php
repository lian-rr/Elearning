<?php

namespace App\Http\Controllers;

use App\Model\Curso;
use App\Model\Matricula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MatriculaController extends Controller
{

    public function enrolledUsers($id)
    {
        $users = DB::table('matricula')
            ->where('curso','=',$id)
            ->join('usuario', 'matricula.usuario', '=', 'usuario.id_usuario')
            ->select('matricula.periodo','matricula.ano', 'matricula.nota', 'usuario.id_usuario',
                'usuario.nombre','usuario.genero', 'usuario.pais', 'usuario.lenguaje')
            ->get();

        return view('enrolled', [
            'course' => $id,
            'course_name' => Curso::find($id)->nombre,
            'users' => $users,

        ]);
    }

    public function allUsers($course)
    {
        return view('', []);
    }

    public function enroll($id)
    {
        dd(Auth::user()->id_usuario);
    }


}
