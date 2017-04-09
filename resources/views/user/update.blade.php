@extends('layouts.app')
@section('title', 'Update User')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Update User</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('users/update') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                           value="{{ $user->nombre  }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{$user->email}}" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="gender" class="col-md-4 control-label">Gender</label>
                                <div class="col-md-6">
                                    <input id="gender" type="text" class="form-control" name="gender"
                                           value="{{$user->genero}}" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="country" class="col-md-4 control-label">Country</label>

                                <div class="col-md-6">
                                    <input id="country" type="text" class="form-control" name="country"
                                           value="{{$user->pais}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="role" class="col-md-4 control-label">Role</label>
                                <div class="col-md-6">
                                    <select name="role" id="role" class="form-control"
                                            @if($role->rol == 1) disabled @endif>Administrator>
                                        <option value="3" @if($role->rol == 3) selected @endif>Professor</option>
                                        <option value="4" @if($role->rol == 4) selected @endif>Student</option>
                                        <option value="2" @if($role->rol == 2) selected @endif>Moderator</option>
                                        <option value="1" @if($role->rol == 1) selected @endif>Administrator</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-success">
                                        Update
                                    </button>
                                    <a href="{{url('/users')}}" class="btn btn-danger">
                                        Cancel
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
