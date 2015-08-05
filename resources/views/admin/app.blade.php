<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Roadweb</title>

    <link href="{{ asset('/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/admin/bootstrap.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/admin/style.css') }}" rel="stylesheet">
</head>
<body class="relative">

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
            <a href="{{ url('/') }}" class="rw-adm-logo">
                <img src="{{asset('images/logo.png')}}" alt="roadweb" title="retour sur le site"/>
            </a>

        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                @if (Auth::check())
                <li {{ active('home') }}><a href="{{ route('admin.home') }}">Home</a></li>
                <li {{ active('posts') }}><a href="{{ route('admin.posts.index') }}">Articles</a></li>
                <li {{ active('users') }}><a href="{{ route('admin.users.index') }}">Utilisateurs</a></li>
                <li {{ active('stats') }}><a href="{{ route('admin.stats.index') }}">Statistiques</a></li>

                @endif

                    @if(Auth::check('right_id') === '1')
                <li {{ active('gestion') }}><a href="{{ route('admin.gestion.index') }}">Gestion des droits</a></li>
                    @endif
                {{--<li {{ active('questions') }}><a href="{{ route('admin.questions.index') }}">Questions</a></li>--}}
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="bg-success">
                    <a href="{{ route('admin.posts.create') }}">
                        <span class="glyphicon glyphicon-plus"></span>
                        &nbsp;&nbsp;Écrire un article</a>
                </li>
                @if (Auth::guest())
                    <li><a href="{{ url('/admin/auth/login') }}">Se connecter</a></li>
                    <li><a href="{{ url('/admin/auth/register') }}">Créer un compte</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">{{ Auth::user()->last_name }} {{ Auth::user()->first_name }} <span
                                    class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/admin/auth/logout') }}">Se déconnecter</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<!-- Scripts -->
<script src="{{ asset('/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap.min.js') }}"></script>
<script src="{{ asset('/bower_components/angular/angular.min.js') }}"></script>

{{-- TextAngular --}}
<link rel='stylesheet' href="{{asset('/bower_components/textAngular/src/textAngular.css')}}">
<script src="{{asset('/bower_components/textAngular/dist/textAngular-rangy.min.js')}}"></script>
<script src="{{asset('/bower_components/textAngular/dist/textAngular-sanitize.min.js')}}"></script>
<script src="{{asset('/bower_components/textAngular/dist/textAngular.min.js')}}"></script>

<script src="{{ asset('/javascript/admin/jquery.confirm.js') }}"></script>
<script src="{{ asset('/javascript/admin/app.js') }}"></script>
<script src="{{ asset('javascript/admin/userstable.js') }}"></script>
 <script type="text/javascript">
    $('#filter').ddTableFilter()
  </script>

</body>
</html>