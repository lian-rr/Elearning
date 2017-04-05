@extends('layouts.app')
@section('title', $course->nombre)
@section('content')
    <div id="course" class="section container">
        <div class="section-header row">
            <h1 class="section-title  col-sm-6 col-md-9">{{$course->nombre}}</h1>
            {{--<a class="col-sm-6 col-md-2 btn btn-success" href="#">--}}
            <a href="{{url('/courses/'.$course->id_curso.'/enroll')}}" id="enroll" class="btn btn-success col-sm-6 col-md-2">Enroll</a>
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
            <div class="body-section container col-md-10">
                <div class="body-header">
                    <h2 class="body-collection-title">Resources</h2>
                </div>

                <div class="body-body row">
                    {{--TODO Resorces component. Check courses/courses.blade.php and components/box.blade.php--}}
                </div>
            </div>


            <div class="utilities col-md-2">
                @component('components.utilities',['id' => $course->id_curso])
                    @endcomponent
            </div>
        </div>

    </div>
@endsection