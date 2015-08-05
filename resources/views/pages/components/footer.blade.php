<footer>
    <img class="rw-index-footer-bcg" src="{{ asset('images/fond-exa-footer.png')}}">

    <div class="rw-index-footer-container">
        <div class="rw-index-footer-contact">
            <p>Pour écrire à l'équipe de Roadweb, remplissez le <a href="{{ url('/contact') }}">formulaire</a>
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
                        <a href="{{ url('/') }}" target="_blank"><img src="{{ asset('images/reseaux-icon/linkedin.png')}}" alt="linkedin"/></a>
                    </li>
                    <li>
                        <a href="{{ url('https://twitter.com/road_web/') }}" target="_blank"><img src="{{ asset('images/reseaux-icon/twitter.png')}}" alt="twitter"/></a>
                    </li>
                    <li>
                        <a href="{{ url('https://www.facebook.com/roadweb.fr?fref=ts') }}" target="_blank"><img src="{{ asset('images/reseaux-icon/facebook.png')}}" alt="facebook"/></a>
                    </li>
                    <li class="rw-hidden">
                        <a href="{{ url('/') }}" target="_blank"><img src="{{ asset('images/reseaux-icon/pinterest.png')}}" alt="pinterest"/></a>
                   </li>
                    <li>
                        <a href="{{ url('https://plus.google.com/+RoadWebfr/posts') }}" target="_blank"><img src="{{ asset('images/reseaux-icon/google-plus.png')}}" alt="google +"/></a>
                    </li>
                    <li>
                        <a href="{{ url('https://twitter.com/road_web/') }}" target="_blank"><img src="{{ asset('images/reseaux-icon/youtube.png')}}" alt="youtube"/></a>
                    </li>
                    <li class="rw-hidden">
                        <a href="{{ url('https://www.youtube.com/channel/UC29cmztuUzb7CLjqfE6865A/feed') }}" target="_blank"><img src="{{ asset('images/reseaux-icon/behance.png')}}" alt="behance"/></a>
                    </li>
                </ul>
            </div>
            <div class="rw-index-footer-nav-list">
                <ul>
                    <li><a href="{{ url('/mentions') }}">Mentions légales</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                    <li><a href="{{ url('/') }}">Adhésion</a></li>
                </ul>
            </div>
        </div>
    </div>

</footer>