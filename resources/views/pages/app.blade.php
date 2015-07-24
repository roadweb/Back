<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Roadweb</title>
    <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/front/style.css') }}"/>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.4";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<img class="rw-fond-exagone-top" src="{{ asset('images/exagonefond.png')}}"/>

@include('pages.components.header')

@include('pages.lognews.lognews')

@yield('content')

@include('pages.components.footer')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('javascript/front/app.header.js') }}" ></script>
<script type="text/javascript" src="{{ asset('javascript/front/app.aboutus.js') }}" ></script>
<script type="text/javascript" src="{{ asset('javascript/front/app.sub.js') }}" ></script>
<script type="text/javascript" src="{{ asset('javascript/front/app.jobs.js') }}" ></script>

</body>
</html>