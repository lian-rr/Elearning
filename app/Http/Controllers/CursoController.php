<?php

namespace App\Http\Controllers;

use App\Model\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{

    public function view(){
        return view('courses');
    }

    /**
     * Return all courses.
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function list(){
        return Curso::all();
    }

    /**
     * Return a single course.
     * @param $id
     * @return mixed
     */
    public function find($id){
        return Curso::find($id);
    }

    /**
     * Create a new course.
     * @param Request $request
     */
    public function insert(Request $request){

    }

    /**
     * Update a course information.
     * @param Request $request
     */
    public function update(Request $request){

    }
}
