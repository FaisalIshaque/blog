<!DOCTYPE html>
<!-- this file has all the wrapping html code -->
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <link rel="stylesheet" href="style.css">

	<title>Master</title>
</head>
<body>

<div class="container">

	@yield('content')

	@yield('footer')

</div>

</body>
</html>