@extends('layouts.app')
@section('title', 'New Course')
@section('content')
    <div class="container">
        <div class="section-header row">
            <h1 class="section-title">New Course</h1>
        </div>

        <div class="section-body">
            <form id="new-course" class="form-horizontal" role="form" method="POST" action="{{url('/courses/update')}}">
                {{ csrf_field() }}

                <div class="col-md-5 left-column">
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Name</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ $course->nombre }}"
                                   autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="initial_date" class="col-md-4 control-label">Initial Date</label>
                        <div class="col-md-6">
                            <input id="initial_date" type="date" class="form-control" name="initial_date"
                                   value="{{ $course->fecha_inicio }}"
                                   disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="final_date" class="col-md-4 control-label">Final Date</label>
                        <div class="col-md-6">
                            <input id="final_date" type="date" class="form-control" name="final_date"
                                   value="{{ $course->fecha_final}}"
                                   disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="state" class="col-md-4 control-label">State</label>
                        <div class="checkbox">
                            <div class="col-md-6 col-md-offset-1">
                                <input type="hidden" name="state" value="0">
                                <input type="checkbox" name="state" value="1" @if($course->estado)checked @endif>
                                Active
                            </div>
                        </div>
                    </div>

                    <div class="form-group hidden-sm hidden-xs visible-md-block visible-lg-block">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-success">
                                Update
                            </button>
                            <a href="{{url('/courses')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-7 right-column">
                    <div class="form-group">
                        <label for="description" class="control-label">Description</label>
                        <textarea name="description" id="description" rows="10" class="form-control"
                        >{{$course->descripcion}}</textarea>
                    </div>
                </div>
                <input id="id" type="hidden" class="form-control" name="id" value="{{ $course->id_curso }}" readonly>

                <div class="form-group hidden-md hidden-lg">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-success">
                            Register
                        </button>
                        <a href="{{url('/courses')}}" class="btn btn-danger">Cancel</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection