<?php

namespace App\Http\Controllers;

use App\Model\Curso;
use App\Model\Matricula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MatriculaController extends Controller
{

    /**
     * Return list of the enrolled users.
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function enrolledUsers($id)
    {
        $users = DB::table('matricula')
            ->where('curso', '=', $id)
            ->join('usuario', 'matricula.usuario', '=', 'usuario.id_usuario')
            ->select('matricula.periodo', 'matricula.ano', 'matricula.nota', 'usuario.id_usuario',
                'usuario.nombre', 'usuario.genero', 'usuario.pais', 'usuario.lenguaje')
            ->get();

        return view('enrolled', [
            'course' => $id,
            'course_name' => Curso::find($id)->nombre,
            'users' => $users,

        ]);
    }

    /**
     * Return students that are not enrolled in the course
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function allUsers($id)
    {
        $users = DB::table('usuario')
            ->where('curso', '=', $id)
            ->leftJoin('matricula', 'usuario.id_usuario', '=', 'matricula.usuario')
            ->whereNull('matricula.usuario')
            ->select('usuario.id_usuario', 'usuario.nombre', 'usuario.genero',
                'usuario.pais', 'usuario.lenguaje')
            ->get();

        return view('enroll', [
            'course' => $id,
            'course_name' => Curso::find($id)->nombre,
            'users' => $users,
        ]);
    }

    /**
     * Enroll a user
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function enroll($id, Request $request)
    {
        $this->validator($request->all())->validate();
        $this->create($id, (isset($request->user)) ? $request->user : Auth::user()->id_usuario, $request->all());

        return redirect((isset($request->user)) ? '/courses/' . $id . '/nenroll' : '/courses/' . $id);
    }


    /**
     * Validate the data comming from the client.
     * @param array $data
     * @return mixed
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'year' => 'required|numeric',
            'session' => 'required|numeric'
        ]);
    }

    /**
     * Enroll a student.
     * @param array $data
     * @return mixed
     */
    protected function create($id, $user, array $data)
    {
        return Matricula::create([
            'periodo' => $data['session'],
            'ano' => $data['year'],
            'curso' => $id,
            'usuario' => $user,
            'nota' => 0,
        ]);
    }


}
