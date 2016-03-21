@extends('master')

@section('content')

	<div class="body">

		<p>{{ $tasks->task_dscp }}</p>
		<p>{{ $tasks->assigned_to }}</p>
		
	</div>

@stop