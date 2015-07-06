<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Roadweb</title>
    <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/front/style.css') }}"/>
</head>
<body>
    
<img class="rw-fond-exagone-top" src="{{ asset('images/exagonefond.png')}}"/>

@yield('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('javascript/front/app.header.js') }}" ></script><script type="text/javascript" src="{{ asset('javascript/front/app.aboutus.js') }}" ></script>
</body>
</html>