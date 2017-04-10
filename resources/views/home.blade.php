@extends('layouts.app')
@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">Wellcome to Elearning {{Auth::user()->nombre}}</div>

                <div class="panel-body">
                    You are logged in as <strong>{{\App\Model\Rol::find(Auth::user()->role)->nombre}}</strong>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
