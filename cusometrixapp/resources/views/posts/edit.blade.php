@extends('layouts.app')

@section('content')
	<div class="jumbotron text-center">
    	<h1>Edit This To-Do</h1>
        {!! Form::open(['action'=>['PostsController@update',$post->id], 'method'=>'POST']) !!}
            <div class="form-group">
                {{Form::label('title','Title')}}
                {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}

            </div>
            <div class="form-group">
                {{Form::label('description','Description')}}
                {{Form::textarea('description',$post->description,['class'=>'form-control','placeholder'=>'Describe the to-do here'])}}

            </div>
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Add',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
	</div>
@endsection