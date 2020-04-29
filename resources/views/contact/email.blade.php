<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
    <style>
        . {font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif}
        body {background-color: powderblue;}
        h1   {
            color: palegoldenrod; 
            background-color:lightpink;
            font-size: 2rem; 
            border-style: solid; 
            border-width: 0px 0px 0px 35px;
            border-color:hotpink;
        }
        p    {color: green;font-size: 1rem;}
    </style>
</head>
<body>
    <h1>Please e-mail {{$name}} at {{$email}} about {{$topic}}!</h1>
</body>
</html>