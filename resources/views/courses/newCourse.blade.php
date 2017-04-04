@extends('layouts.app')
@section('title', 'New Course')
@section('content')
    <div class="container">
        <div class="section-header row">
            <h1 class="section-title">New Course</h1>
        </div>

        <div class="section-body">
            <form id="new-course" class="form-horizontal" role="form" method="POST" action="/courses/course">
                {{ csrf_field() }}

                <div class="col-md-5 left-column">
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Name</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
                                   required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('initial_date') ? ' has-error' : '' }}">
                        <label for="initial_date" class="col-md-4 control-label">Initial Date</label>
                        <div class="col-md-6">
                            <input id="initial_date" type="date" class="form-control" name="initial_date"
                                   value="{{ old('initial_date') }}"
                                   required>

                            @if ($errors->has('initial_date'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('initial_date') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('final_date') ? ' has-error' : '' }}">
                        <label for="final_date" class="col-md-4 control-label">Final Date</label>
                        <div class="col-md-6">
                            <input id="final_date" type="date" class="form-control" name="final_date"
                                   value="{{ old('final_date') }}"
                                   required>

                            @if ($errors->has('final_date'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('final_date') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group hidden-sm hidden-xs visible-md-block visible-lg-block">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-success">
                                Register
                            </button>
                        </div>
                    </div>
                </div>


                <div class="col-md-7 right-column">
                    <div class="form-group">
                        <label for="description" class="control-label">Description</label>
                        <textarea name="description" id="description" rows="10" class="form-control"
                                  required></textarea>
                    </div>
                </div>

                <div class="form-group hidden-md hidden-lg">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-success">
                            Register
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection