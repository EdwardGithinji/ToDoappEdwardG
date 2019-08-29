@extends('layouts.app')

@section('content')
	<div class="jumbotron text-center">
    	<h1>Add a To-Do</h1>
        {!! Form::open(['action'=>'PostsController@store', 'method'=>'POST']) !!}
            <div class="form-group">
                {{Form::label('title','Title')}}
                {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}

            </div>
            <div class="form-group">
                {{Form::label('description','Description')}}
                {{Form::textarea('description','',['class'=>'form-control','placeholder'=>'Describe the to-do here'])}}

            </div>
            {{Form::submit('Add',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
	</div>
@endsection