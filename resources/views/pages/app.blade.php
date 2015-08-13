<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Roadweb</title>
    <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}"/>
    <link href="{{ asset('bower_components/dw-bxslider-4/dist/jquery.bxslider.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/front/style.css') }}"/>

</head>
<body>
<div id="fb-root"></div>

<img class="rw-fond-exagone-top" src="{{ asset('images/exagonefond.png')}}"/>

@include('pages.components.header')

@yield('content')

@include('pages.components.footer')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('javascript/front/app.header.js') }}" ></script>
<script src="{{asset('bower_components/dw-bxslider-4/dist/jquery.bxslider.js')}}"></script>
<script type="text/javascript" src="{{ asset('javascript/front/app.carrousel.js') }}" ></script>
<script type="text/javascript" src="{{ asset('javascript/front/app.jobmenu.js') }}" ></script>
<script type="text/javascript" src="{{ asset('javascript/front/app.article.js') }}" ></script>
<script type="text/javascript" src="{{ asset('javascript/front/app.aboutus.js') }}" ></script>
<script type="text/javascript" src="{{ asset('javascript/front/app.sub.js') }}" ></script>
<script type="text/javascript" src="{{ asset('javascript/front/app.compte.js') }}" ></script>
<script type="text/javascript" src="{{ asset('javascript/front/app.jobs.js') }}" ></script>


</body>
</html>