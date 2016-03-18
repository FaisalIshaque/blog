@extends('master')

@section('content')
		
			<div class="body">
			<span>{{ $article->body }}</span><br>
			<p>{{ $article->published_at }}</p>
			<span>{{ $article->author }}</span>
			<br><br><br>
			</div>
@stop