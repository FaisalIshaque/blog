@extends('master')

@section('content')

	@foreach ($tasks as $task)

	<article>

		<a href='{{ url("tasks/$task->id") }}'>{{ $task->task_name }}</a>

	</article>

	@endforeach

@stop