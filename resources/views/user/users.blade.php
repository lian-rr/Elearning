@extends('layouts.app')
@section('title', 'Users')
@section('content')
    <div id="students" class="section container">
        <div class="section-header row">
            {{--<h1 class="section-title">Users--}}
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
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Country</th>
                            <th>Language</th>
                            <th>Action</th>
                        </tr>
                        @foreach($users as $user)
                            <tr>
                                <td class="text-center">{{$user->id_usuario}}</td>
                                <td>{{$user->nombre}}</td>
                                <td>{{$user->genero}}</td>
                                <td>{{$user->pais}}</td>
                                <td>{{$user->lenguaje}}</td>
                                <td><a href="{{url('/users/'.$user->id_usuario)}}"
                                       class="btn btn-success">Update</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="utilities col-md-2">
                @component('components.userOptions')
                @endcomponent
            </div>
        </div>
    </div>
@endsection