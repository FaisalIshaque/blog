@extends('master')

@section('content')
		
			<div class="body">

			<span>{{ $article->body }}</span><br>
			<p>{{ $article->published_at }}</p>
			<span>{{ $article->author }}</span>
			<br><br><br>
			</div>

			{{-- the variable $articles is coming from the controller and the spellings should be the same with the controller --}}

@stop

