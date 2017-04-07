@extends('layouts.app')
@section('title', 'Enrolled Students')
@section('content')
    <div id="students" class="section container">
        <div class="section-header row">
            <h1 class="section-title">{{$course_name}}
                <small>Students Enrolled</small>
            </h1>
        </div>

        <div class="body">
            <div class="body-section container col-md-10">
                <div class="body-header">
                    <h2 class="resource-collection-title">Students</h2>
                </div>
                <div class="body-body row">
                    <table class="table table-striped">
                        <thead>

                        </thead>
                        <tbody>
                        <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Country</th>
                            <th>Language</th>
                            <th>Year/Session</th>
                            <th>Score</th>
                        </tr>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->nombre}}</td>
                                <td>{{$user->genero}}</td>
                                <td>{{$user->pais}}</td>
                                <td>{{$user->lenguaje}}</td>
                                <td>{{$user->ano.'/'.$user->periodo}}</td>
                                <td>{{$user->nota}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="utilities col-md-2">
                @component('components.utilities',['id' => $course])
                @endcomponent
            </div>
        </div>
    </div>
@endsection