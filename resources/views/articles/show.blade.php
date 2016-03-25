@extends('master')

@section('content')
		
			<div class="body">

			<span>{{ $article->body }}</span><br>

			<p>{{ $article->published_at }}</p>

			

			@unless ($article->tags->isEmpty())
			
			<h4>Tags: </h4>	
			
				<ul>	
					@foreach ($article->tags as $tag)

						<li> {{ $tag->name }} </li>

					@endforeach
				</ul>

			@endunless

			<span>{{ $article->author }}</span>

			<br><br><br>
			</div>

		{{-- the variable $articles is coming from the controller and the spellings should be the same with the controller --}}

@stop

