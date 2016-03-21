@extends('master')

@section('content')
<div class="container">
	<h2>Write New Article</h2>

	<hr/>

	{!! Form::open(['url' => 'articles']) !!}
	
		<!--  -->
		<div class="form-group">

			{!! Form::label('titel', 'Title:') !!}
			{!! Form::text('title', null, ['class' => 'form-control']) !!}
		
		</div>

		<div class="form-group">

			{!! Form::label('body', 'Body:') !!}
			{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
		
		</div>

		<div class="form-group">

			{!! Form::label('author', 'author:') !!}
			{!! Form::text('author', null, ['class' => 'form-control']) !!}
		
		</div>

		<div class="form-group">

			{!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}
		
		</div>


		
	{!! Form::close() !!}
</div>


@stop

