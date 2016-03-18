@extends('master')

@section('content')


	@foreach ($article as $articles)
		
		<article>

		<a href='{{ url("articles/$articles->id") }}'>{{ $articles->title }}</a> 

		{{-- <a href="{{ url('/articles',$articles->id) }}">{{ $articles->title }}</a>  --}}

		{{-- <a href="/articles/{{ $articles->id }}">{{ $articles->title }}</a> --}}
		
		{{-- <a href="{{ action('ArticlesController@show', [$articles->id]) }}">{{ $articles->title }}</a> --}}	
		
		</article>
		
	@endforeach


@stop