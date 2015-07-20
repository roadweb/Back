<footer>
    <img class="rw-index-footer-bcg" src="{{ asset('images/fond-exa-footer.png')}}">

    <div class="rw-index-footer-container">
        <div class="rw-index-footer-contact">
            <p>Pour écrire à l'équipe de Roadweb, remplissez le <a href="{{ url('/') }}">formulaire</a>
                du site. Nous vous répondrons le plus rapidement possible.</p>
        </div>
        <div class="rw-index-footer-btn-subscription">
            <a href="{{ url('/') }}">Vos demandes</a>
        </div>
        <div class="rw-index-footer-nav">
            <div class="rw-index-footer-nav-networks">
                <div class="rw-index-footer-nav-bcg-icon"></div>
                <p>Nos Réseaux Sociaux</p>
                <ul>
                    <li class="rw-hidden">
                        <a href="{{ url('/') }}"><img src="{{ asset('images/reseaux-icon/linkedin.png')}}" alt="linkedin"/></a>
                    </li>
                    <li>
                        <a href="{{ url('/') }}"><img src="{{ asset('images/reseaux-icon/twitter.png')}}" alt="twitter"/></a>
                    </li>
                    <li>
                        <a href="{{ url('https://www.facebook.com/roadweb.fr?fref=ts') }}"><img src="{{ asset('images/reseaux-icon/facebook.png')}}" alt="facebook"/></a>
                    </li>
                    <li class="rw-hidden">
                        <a href="{{ url('/') }}"><img src="{{ asset('images/reseaux-icon/pinterest.png')}}" alt="pinterest"/></a>
                   </li>
                    <li class="rw-hidden">
                        <a href="{{ url('/') }}"><img src="{{ asset('images/reseaux-icon/google-plus.png')}}" alt="google +"/></a>
                    </li>
                    <li class="rw-hidden">
                        <a href="{{ url('/') }}"><img src="{{ asset('images/reseaux-icon/behance.png')}}" alt="behance"/></a>
                    </li>
                </ul>
            </div>
            <div class="rw-index-footer-nav-list">
                <ul>
                    <li><a href="{{ url('/motions') }}">Mentions légales</a></li>
                    <li><a href="{{ url('/') }}">Contact</a></li>
                    <li><a href="{{ url('/') }}">Adhésion</a></li>
                </ul>
            </div>
        </div>
    </div>

</footer>