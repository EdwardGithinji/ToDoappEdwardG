@extends('layouts.app')
@section('content')
	<div class="jumbotron text-center">
    	<h1>{{$title}}</h1>
    	<h1>Hello! Welcome to Edward's Web App</h1>
    	<p>This is the web app as per requirements of the second stage of the interview</p>
    	@if(Auth::guest())
	    	<p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
	    @endif
	</div>
@endsection
