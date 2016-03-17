<!DOCTYPE html>
<html>
    <head>
        <title>Welcome</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <link rel="stylesheet" href="style.css"> 
        
    </head>
    <body>
        <div class="container">

            <!-- variable sent from Index function-->

            <?= $name; ?><br><br> <!-- PHP syntax -->

            {{  $name }} <br><br> <!-- Laravel Escaped Data (best practice) --> 

            {!! $name !!}<br><br> <!-- Laravel Unescaped Data (not a good practice) -->

            <div class="content">
                <div class="title">Welcome Page</div>
            </div>
        </div>
    </body>
</html>
