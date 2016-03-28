<!DOCTYPE html>
<!-- this file has all the wrapping html code -->
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        
    {!! HTML::style('css/all.css') !!}
    {!! HTML::style('css/app.css') !!}


	<title>Master</title>
</head>
<body>
<div class="page-header">
    @include('partials.navbar')
</div>

<div class="container">


    {!! HTML::script('js/all.js') !!}
    <script>
        $( document).ready( function(){
            $('div.alert').not('.alert-important').delay(3000).slideUp(300);

                //$('#flash-overlay-modal').modal();
        });
    </script>
    
    {{-- @include('partials.flash') --}}

    @include('flash::message')

    @yield('content')

</div>

    @yield('footer')

</body>

</html>