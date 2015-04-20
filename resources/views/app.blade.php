<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Road Web</title>

    <link href="{{ asset('/css/bootstrap.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default theme-header">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li {{ active('/') }}><a href="{{ url('/') }}">Home</a></li>
                <li {{ active('posts') }}><a href="{{ route('posts.index') }}">Articles</a></li>
                <li {{ active('users') }}><a href="{{ route('users.index') }}">Utilisateurs</a></li>
                <li {{ active('stats') }}><a href="{{ route('users.index') }}">Statistiques</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="bg-success"><a href="{{ route('posts.create') }}"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Écrire un article</a></li>
                @if (Auth::guest())
                    <li><a href="{{ url('/auth/login') }}">Se connecter</a></li>
                    <li><a href="{{ url('/auth/register') }}">Créer un compte</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">{{ Auth::user()->last_name }} {{ Auth::user()->first_name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/auth/logout') }}">Se déconnecter</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="{{ asset('/javascript/jquery.confirm.js') }}"></script>
<script src="{{ asset('/javascript/app.js') }}"></script>
</body>
</html>