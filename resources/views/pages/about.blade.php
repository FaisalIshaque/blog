@extends('master')

@section('content')

@if( $first == "Hello" )

    {{ $first  }}<br><br>
    {{ $second }}<br><br>
    {{ $third  }}<br><br><!-- array of variables sent from the About function -->

    <div class="title">About Page</div>

@else

    <h3 class="title">Woops!!</h3>

@endif



@stop