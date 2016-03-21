@extends('master')

@section('content')
		
			<div class="body">

			<span>{{ $articles->body }}</span><br>
			<p>{{ $articles->published_at }}</p>
			<span>{{ $articles->author }}</span>
			<br><br><br>
			</div>

			{{-- the variable $articles is coming from the controller and the spellings should be the same with the controller --}}

@stop

