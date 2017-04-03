<?php

namespace App\Http\Controllers;

use App\Model\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{

    /**
     * Return view with the courses data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function courses(){
        return view('courses', ['courses' => $this->list()->where('estado', 'equal',true)]);
    }

    public function course($id){
        return $this->find($id);
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
