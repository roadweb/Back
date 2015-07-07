<header class="rw-header_container">
    <div class="rw-header_top">
        <p>
            <img class="rw-logo" alt="logo hexagonal roadweb" src="{{asset('images/logo.png')}}"/>
        </p>

        <h1 class="rw-slogan">Bienvenue sur <em>road-web</em></h1>

        <div id="rw-search">
            {{--ajoute la classe transSearch quand il y a un scroll--}}

            <form action="" class="rw-searchbar" method="post">
                <input name="" type="search" placeholder="Rechercher sur Roadweb"/>
            </form>
            <p><img class="rw-loupe" alt="loupe" src="{{asset('images/loupe.png')}}" height="90px"></p>
        </div>
    </div>
    <div class="rw-clear"></div>
    <nav id="rw-nav">
        {{--ajoute la classe fixNavigation quand il y a un scroll--}}
        <div class="rw-logo-fix">
        <img alt="logo hexagonal roadweb" src="{{asset('images/logo.png')}}"/>
        </div>
        <ul class="rw-ul_grey">
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Nos métiers</a></li>
            <li><a href="#">Qui sommes nous</a></li>
        </ul>
        <ul class="rw-ul_red">
            <li><a href="#">Inscription</a></li>
        </ul>
    </nav>
    {{--<div class="rw-clear"></div>--}}
</header>
