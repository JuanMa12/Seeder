@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p>You are logged in!</p>
                    <p><a href="{{url('users')}}">Users</a></p>
                    <p><a href="{{url('posts')}}">Post</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
