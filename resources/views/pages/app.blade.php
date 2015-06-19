<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Roadweb</title>
    <link rel="stylesheet" href="{{ asset('css/front/style.css') }}"/>
</head>
<body>

@yield('content')

<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script> 
<script type='text/javascript' src={{ asset('javascript/front/app.header.js') }}></script> 
</body>
</html>