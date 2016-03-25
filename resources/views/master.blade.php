<!DOCTYPE html>
<!-- this file has all the wrapping html code -->
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <script src="//code.jquery.com/jquery.js"></script>

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">

    <script>
        $( document).ready( function(){
            $('div.alert').not('.alert-important').delay(3000).slideUp(300);

            //$('#flash-overlay-modal').modal();
        });
    </script>

	<title>Master</title>
</head>
<body>

<div class="container">
	
	{{-- @include('partials.flash') --}}

	@include('flash::message')

	@yield('content')

</div>

	@yield('footer')

</body>
</html>