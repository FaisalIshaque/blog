@extends('master')

@section('content')
<div class="container">
	<h2>Edit This Article</h2>

	<hr/>

{{-- {!! Form::model($article, ['method' => 'PATCH', 'url' => 'articles/'.$article->id]) !!} --}}
	
	{!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}

		@include('articles.form', ['submitBtnTxt' => 'Update Article'])
		
	{!! Form::close() !!}

	@include('errors.list')
</div>


@stop

