@extends('layouts.app')
@section('title', $course->nombre)
@section('content')
    <div id="course" class="section container">
        <div class="section-header row">
            <h1 class="section-title  col-sm-6 col-md-9">{{$course->nombre}}</h1>
            <a id="enroll" role="button"
               class="btn btn-success col-sm-6 col-md-2"><i class="fa fa-check" aria-hidden="true"></i>
                Enroll</a>
        </div>

        <div class="section-body">
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="field-title">Initial Date:</span>
                    <span class="field-value">{{$course->fecha_inicio}}</span>
                </div>
                <div class="col-md-4">
                    <span class="field-title">Final Date:</span>
                    <span class="field-value">{{$course->fecha_final}}</span>
                </div>

                <div class="col-md-4">
                    <span class="field-title">Duration:</span>
                    <span class="field-value">{{$course->duracion.' weeks'}}</span>
                </div>
            </div>
            <div class="row description">
                <p class="col-md-12">{{$course->descripcion}}</p>
            </div>
        </div>

        <div class="body">
            <div class="body-section container @if(Auth::user()->role->rol == 1)col-md-10 @endif">
                <div class="body-header">
                    <h2 class="body-collection-title">Resources</h2>
                </div>

                <div class="body-body row">
                    {{--TODO Resorces component. Check courses/courses.blade.php and components/box.blade.php--}}
                </div>
            </div>

            @if(Auth::user()->role->rol == 1)
                <div class="utilities col-md-2">
                    @component('components.utilities',['id' => $course->id_curso])
                    @endcomponent
                </div>
            @endif
        </div>
    </div>


    <div class="modal fade" id="enrollModal" tabindex="-1" role="dialog" aria-labelledby="enrollModal">
        @component('components.modals.enroll',['course_id' => $course->id_curso,
         'course_name' => $course->nombre,
         'current_user' => true,
        ])
        @endcomponent
    </div>

@endsection