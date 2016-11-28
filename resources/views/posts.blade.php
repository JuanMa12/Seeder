@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <p>Posts</p>
                        <table>
                            <tr>
                                <th>ID</th>
                                <th>USER</th>
                                <th>CONTENT</th>
                            </tr>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->user_name}}</td>
                                <td>{{$post->content}}</td>
                            </tr>
                            @endforeach
                        </table>
                        <a href="{{url('/home')}}">Atras</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection