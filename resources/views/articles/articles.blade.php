@extends('master')

@section('content')


	@foreach ($articles as $article)
		
		<article>

		<a href='{{ url("articles/$article->id") }}'>{{ $article->title }}</a> 

		{{-- <a href="{{ url('/articles',$articles->id) }}">{{ $article->title }}</a>  --}}

		{{-- <a href="/articles/{{ $articles->id }}">{{ $article->title }}</a> --}}
		
		{{-- <a href="{{ action('ArticlesController@show', [$articles->id]) }}">{{ $article->title }}</a> --}}	
		
		</article>
		
	@endforeach


@stop
