@extends('layouts.app')
@section('content')
	<h1>{{$title}}</h1>
	<p>These are the languages I am proficient at:</p>
	@if(count($services)>0)
		<ul class="list-group">
			@foreach($services as $service)
				<li class="list-group-item">{{$service}}</li>
			@endforeach
		</ul>
	@endif
	<p>Email me at eduggithinji@gmail.com to request my services.</p>
@endsection
