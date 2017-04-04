@extends('layouts.app')
@section('title', 'Courses')
@section('content')
    <div class="container">
        <div class="section-header row">
            <h1 class="section-title col-sm-6 col-md-9">Courses</h1>
            <a class="col-sm-6 col-md-2 btn btn-success" href="{{url('/courses/course')}}">
                New Course
                <i class="fa fa-plus" aria-hidden="true"></i>
            </a>
        </div>

        <div class="section-body">
            @foreach($courses as $course)
                    @component('components.box', ['id' => $course->id_curso,
                                                  'title' => $course->nombre,
                                                  'description' => $course->descripcion,
                                                  'start_date' => $course->fecha_inicio,
                                                  'end_date' => $course->fecha_final,
                                                  'duration' => $course->duracion,
                                                  'style' => $loop->index % 2 == 0,
                                                 ])
                    @endcomponent
            @endforeach
        </div>
    </div>
@endsection