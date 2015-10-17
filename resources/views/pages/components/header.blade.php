<header class="rw-header_container" id="rw-header_container">
    <div class="rw-header_top">
        <img class="rw-logo" alt="logo hexagonal roadweb" src="{{asset('images/logo.png')}}"/>

        <h1 class="rw-slogan"><a href="{{ URL::to( '/') }}">Bienvenue sur <br/> <em>road-web</em>.fr</a></h1>

        {{--<div id="rw-search">

            <form action="" class="rw-searchbar" method="post">
                <input name="" type="search" placeholder="Rechercher sur Roadweb"/>
            </form>
            <p><img class="rw-loupe" alt="loupe" src="{{asset('images/loupe.png')}}" height="90px"></p>
        </div>--}}
    </div>
    <div class="rw-clear"></div>

    @include('pages.lognews.lognews')

    <nav id="rw-nav">
        {{--ajoute la classe fixNavigation quand il y a un scroll--}}
        <div class="rw-logo-fix not_mobile">
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

{{--header pour smarthpone caché pour desktop--}}
{{--<header class="rw-header_container not_screen">--}}
    {{--<div class="rw-header_top">--}}
        {{--<a href="#">--}}
            {{--<img class="rw-logo" alt="logo hexagonal roadweb" src="{{asset('images/logo.png')}}"/>--}}
        {{--</a>--}}

        {{--<h1 class="rw-slogan">Bienvenue sur <strong>road-web</strong>.fr</h1>--}}

        {{--<div id="rw-search">--}}

            {{--<form action="" class="rw-searchbar" method="post">--}}
                {{--<input name="" type="search" placeholder="Rechercher sur Roadweb"/>--}}
            {{--</form>--}}
            {{--<p><img class="rw-loupe" alt="loupe" src="{{asset('images/loupe.png')}}" height="90px"></p>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="rw-clear"></div>--}}

    {{--@include('pages.lognews.lognews')--}}

    {{--<nav id="rw-nav">--}}

        {{--@if(Auth::check())--}}
            {{--<a href="{{ route('compte') }}"><i class="fa fa-user fa-2x"></i></a>--}}
        {{--@else()--}}
            {{--<a href="{{ url('/inscription') }}"><i class="fa fa-user fa-2x"></i></a>--}}
        {{--@endif--}}
        {{--<a href="#"><i class="fa fa-search fa-2x"></i></a>--}}

        {{--<a href="#"><i class="fa fa-bars fa-2x"></i></a>--}}

        {{--<ul class="rw-ul_red ">--}}
            {{--<li class="{{ Request::is( '/') ? 'active' : '' }}">--}}
                {{--<a href="{{ URL::to( '/') }}">Accueil</a>--}}
            {{--</li>--}}
            {{--<li class="{{ Request::is('blog') ? 'active' : '' }}">--}}
                {{--<a href="{{ URL::to( 'blog') }}">Blog</a>--}}
            {{--</li>--}}
            {{--<li class="{{ Request::is( 'jobs') ? 'active' : '' }}">--}}
                {{--<a href="{{ URL::to( 'jobs')  }}">Nos métiers</a>--}}
            {{--</li>--}}
            {{--<li class="{{ Request::is('apropos') ? 'active' : '' }}">--}}
                {{--<a href="{{ URL::to( 'apropos')  }}">Qui sommes nous</a>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</nav>--}}

    {{--<div class="rw-clear"></div>--}}
{{--</header>--}}


