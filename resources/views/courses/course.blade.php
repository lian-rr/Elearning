@extends('layouts.app')
@section('title', $course->nombre)
@section('content')
    <div id="course" class="container">
        <div class="section-header row">
            <h1 class="section-title">{{$course->nombre}}</h1>
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

        <div class="resources container">
            <div class="resources-header col-md-10 col-md-offset-1">
                <h2 class="resource-collection-title">Resources</h2>
            </div>

            <div class="resources-body row">

            </div>

        </div>
    </div>
@endsection