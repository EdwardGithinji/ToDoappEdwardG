@extends('layouts.app')

@section('content')
	<div class="jumbotron text-center">
    	<h1>{{$post->title}}</h1>
        <div>
           {{$post->description}} 
        </div>
        <small>Created {{$post->created_at}}</small>
    </br>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
    </br>
    </br>

    {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST','class'=>'pull-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
	</div>
@endsection