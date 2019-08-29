@extends('layouts.app')

@section('content')
	<div class="jumbotron text-center">
    	<h1>View your posts here</h1>
    	@if(count($posts)>0)
    		@foreach($posts as $post)
    			<div class="well">
    				<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
    				<small>Created {{$post->created_at}}</small>
    			</div>
    		@endforeach
    		{{$posts->links()}}
    	@else
    		<p>No Posts Found</p>
    	@endif
	</div>
@endsection