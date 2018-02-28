@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post-> title}}</h1>
    
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written in {{$post->created_at}}  by {{$post->user->name}}</small> <br>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>

            {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'btn pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class'=> 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection