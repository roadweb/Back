<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes" />
    <title>Roadweb</title>
    <meta name="description" content="Road-Web est un site communautaire rassemblant des élèves et des professionnels juniors dans les métiers du web : fiches métiers, articles autour du web…">
   {{--meta facebook--}}
    <meta property="og:title" content="Road Web" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="Road-Web est un site communautaire rassemblant des élèves et des professionnels juniors dans les métiers du web : fiches métiers, articles autour du web…" />
    <meta property="og:url" content="http://road-web.fr" />
    <meta property="og:image" content="http://road-web.fr/images/logo.png" />

    {{--meta twitter--}}
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@roadweb" />
    <meta name="twitter:title" content="RoadWeb" />
    <meta name="twitter:description" content="Road-Web est un site communautaire rassemblant des élèves et des professionnels juniors dans les métiers du web : fiches métiers, articles autour du web…" />
    <meta name="twitter:image" content="http://road-web.fr/images/logo.png" />

    <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}"/>
    <link href="{{ asset('bower_components/dw-bxslider-4/dist/jquery.bxslider.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/front/style.css') }}"/>

</head>
<body>


@yield('content')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('javascript/front/app.header.js') }}" ></script>
<script src="{{asset('bower_components/dw-bxslider-4/dist/jquery.bxslider.js')}}"></script>
<script type="text/javascript" src="{{ asset('javascript/front/app.carrousel.js') }}" ></script>
{{--<script type="text/javascript" src="{{ asset('javascript/front/app.jobmenu.js') }}" ></script>--}}
<script type="text/javascript" src="{{ asset('javascript/front/app.article.js') }}" ></script>
<script type="text/javascript" src="{{ asset('javascript/front/app.aboutus.js') }}" ></script>
<script type="text/javascript" src="{{ asset('javascript/front/app.sub.js') }}" ></script>
<script type="text/javascript" src="{{ asset('javascript/front/app.compte.js') }}" ></script>
<script type="text/javascript" src="{{ asset('javascript/front/app.jobs.js') }}" ></script>
<script type="text/javascript" src="{{ asset('javascript/front/app.jobfilter.js') }}" ></script>
</body>
</html>