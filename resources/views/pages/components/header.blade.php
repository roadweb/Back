<header class="rw-header_container">
    <div class="rw-header_top">
        <p>
            <img class="rw-logo" alt="logo hexagonal roadweb" src="{{asset('images/logo.png')}}"/>
        </p>

        <h1 class="rw-slogan">Bienvenue sur <em>road-web</em></h1>

        {{--<div id="rw-search">

            <form action="" class="rw-searchbar" method="post">
                <input name="" type="search" placeholder="Rechercher sur Roadweb"/>
            </form>
            <p><img class="rw-loupe" alt="loupe" src="{{asset('images/loupe.png')}}" height="90px"></p>
        </div>--}}
    </div>
    <div class="rw-clear"></div>
    <nav id="rw-nav">
        {{--ajoute la classe fixNavigation quand il y a un scroll--}}
        <div class="rw-logo-fix">
            <img alt="logo hexagonal roadweb" src="{{asset('images/logo.png')}}"/>
        </div>
        <ul class="rw-ul_grey">
            <li class="{{ Request::is( '/') ? 'active' : '' }}">
                <a href="{{ URL::to( '/') }}">Accueil</a>
            </li>
            <li class="{{ Request::is('blog') ? 'active' : '' }}">
                <a href="{{ URL::to( 'blog') }}">Blog</a>
            </li>
            <li class="{{ Request::is( 'jobs') ? 'active' : '' }}">
                <a href="{{ URL::to( 'jobs')  }}">Nos métiers</a>
            </li>
            <li class="{{ Request::is('apropos') ? 'active' : '' }}">
                <a href="{{ URL::to( 'apropos')  }}">Qui sommes nous</a>
            </li>
        </ul>
        <ul class="rw-ul_red">
            @if(Auth::check())
                <li><a href="{{ route('compte') }}">Mon compte</a></li>
            @else()
                <li><a href="{{ url('/inscription') }}">S'inscrire</a></li>
            @endif
        </ul>
    </nav>
    {{--<div class="rw-clear"></div>--}}
</header>
