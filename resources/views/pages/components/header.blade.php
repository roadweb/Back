<header class="rw-header_container">
    <div class="rw-header_top">
        <p>
            <img class="rw-logo" alt="logo hexagonal roadweb" src="{{asset('images/logo.png')}}">
        </p>

        <h1 class="rw-slogan">bienvenue sur <em>roadweb</em>.com</h1>

        <div id="rw-search">
            {{--ajoute la classe transSearch quand il y a un scroll--}}

            <form action="" class="rw-searchbar" method="post">
                <input name="" type="search" placeholder="Rechercher sur Roadweb.com"/>
            </form>
            <p><img class="rw-loupe" alt="loupe" src="{{asset('images/loupe.png')}}" height="90px"></p>
        </div>
    </div>
    <div class="rw-clear"></div>
    <nav id="rw-nav" >
        {{--ajoute la classe fixNavigation quand il y a un scroll--}}
        <ul class="rw-ul_grey" >
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Blog</a></li>

        </ul>
        <ul class="rw-ul_red">
            <li><a href="#">Abonnement</a></li>
        </ul>
    </nav>
</header>