@extends('master')

@section('content')

@if (count($colors) >= 3)

	<h3>Available Colors:</h3>

		<ol>
			@foreach ($colors as $rung)
			<li>{{ $rung }}</li>
			@endforeach
		</ol>

@endif

	<div class="title">Home Page</div>

@stop