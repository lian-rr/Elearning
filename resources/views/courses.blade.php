@extends('layouts.app')
@section('title', 'Courses')
@section('content')
    <div class="container">
        <div class="section-header">
            <h1 class="section-title">Courses</h1>
        </div>

        <div class="section-body">
            @foreach($courses as $course)
                    @component('components.box', ['id' => $course->id_curso,
                                                  'title' => $course->nombre,
                                                  'description' => $course->descripcion,
                                                  'start_date' => $course->fecha_inicio,
                                                  'end_date' => $course->fecha_final,
                                                  'duration' => $course->duracion.' semanas',
                                                  'style' => $loop->index % 2 == 0,
                                                 ])
                    @endcomponent
            @endforeach
        </div>


    </div>
@endsection