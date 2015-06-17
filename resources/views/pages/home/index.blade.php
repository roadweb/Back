@extends('pages.app')

@section('content')
    <header class="rw-header_container">
        <div class="rw-header_top">
            <p>
                <img class="rw-logo" alt="logo hexagonal roadweb" src="{{asset('images/logo.png')}}">
            </p>

            <p class="rw-slogan">bienvenue sur <em>roadweb</em>.com</p>

            <div class="rw-search">
                <form action="" class="rw-searchbar" method="post">
                    <input name="" type="search" placeholder="Rechercher sur Roadweb.com"/>
                </form>
                <p><img class="rw-loupe" alt="loupe" src="{{asset('images/loupe.png')}}" height="90px"></p>
            </div>
        </div>
        <div class="rw-clear"></div>
        <nav class="rw-nav">
            <ul class="rw-ul_grey">
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Forum</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Tutoriel</a></li>
                <li><a href="#">Exercices</a></li>
                <li><a href="#">Codothèque</a></li>
            </ul>
            <ul class="rw-ul_red">
                <li><a href="#">Cvthèque</a></li>
                <li><a href="#">Connexion</a></li>
            </ul>
        </nav>
    </header>

    <footer>

        <img class="rw-index-footer-bcg" src="{{ asset('images/fond-exa-footer.png')}}">

        <div class="rw-index-footer-container">
            <div class="rw-index-footer-contact">
                <p>Pour écrire à l'équipe de Roadweb, remplissez le <a href="#">formulaire</a>
                    du site. Nous vous répondrons le plus rapidement possible.</p>
            </div>
            <div class="rw-index-footer-btn-subscription">
                <a href="#">Abonnement à Roadweb</a>
            </div>

            <div class="clear"></div>
            <div class="rw-index-footer-nav">
                <div class="rw-index-footer-nav-bcg-icon"></div>
                <p>Nos Réseaux Sociaux</p>
                <ul>
                    <li>
                        <a href="">
                            <img src="{{ asset('images/linkedin.png')}}" alt="linkedin"/>
                        </a>
                    </li>
                    <li>
                        <a href=""><img src="{{ asset('images/twitter.png')}}" alt=" twitter"/></a>
                    </li>
                    <li>
                        <a href=""><img src="{{ asset('images/facebook.png')}}" alt=" facebook"/></a>
                    </li>
                    <li>
                        <a href=""><img src="{{ asset('images/pinterest.png')}}" alt=" pinterest"/></a>
                    </li>
                    <li>
                        <a href=""><img src="{{ asset('images/google-plus.png')}}" alt=" google +"/></a>
                    </li>
                    <li>
                        <a href=""><img src="{{ asset('images/behance.png')}}" alt="behance"/></a>
                    </li>
                </ul>
                <ul>
                    <li><a href="">Mentions légales</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Abonnement</a></li>
                </ul>
            </div>
        </div>

    </footer>
@stop