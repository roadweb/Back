@extends('pages.app')

@section('content')

    {{--mettre en relatif--}}
    <div class="rw-land-container">

        <div class="rw-land-container-header rw-land-header-title rw-land-header-logo">

                <img src="{{asset('images/logo.png')}}" alt="road web">
                <h1>Bienvenue sur <span>road-web</span>.fr</h1>

            <div class="rw-land-header-line"></div>

        </div>

        <div class="rw-land-container-content">

            <div class="rw-land-container-bg">
                <div class="rw-land-content">

                    <img src="{{asset('landing/fille.png')}}" alt="roadweb">


                    <img src="{{asset('landing/garcon.png')}}" alt="roadweb">

                </div>

            </div>


        </div>

        {{-- mettre en absolute--}}
        <div class="rw-land-content-video">

            <video autoplay>
                <source src="{{asset('landing/landing.mp4')}}" type="video/mp4">
                Votre navigateur ne supporte pas le format vidéo.
            </video>

        </div>

        <div class="rw-land-content-btn">
            <a href="{{ URL::to( '/') }}">
                <div class="rw-land-btn-arrow">
                    <i class="fa fa-chevron-right"></i>
                </div>
                <button class="rw-land-btn-btn">Accéder au site</button>
            </a>
        </div>

        <div class="rw-land-container-footer">
            <h2>Le site communautaire du web associatif</h2>

            <img class="rw-icon-rs" src="{{asset('images/reseaux-icon/reseaux-sociaux.png')}}" alt="road web">
            <h3>Nos réseaux sociaux</h3>

            <div class="rw-land-footer-rs">
                <a href="#">
                    <img src="{{asset('images/reseaux-icon/linkedin.png')}}" alt="linkedin">
                </a>
                <a href="{{ url('https://twitter.com/road_web/') }}" target="_blank">
                    <img src="{{asset('images/reseaux-icon/twitter.png')}}" alt="twitter">
                </a>
                <a href="{{ url('https://www.facebook.com/roadweb.fr?fref=ts') }}" target="_blank">
                    <img src="{{asset('images/reseaux-icon/facebook.png')}}" alt="facebook">
                </a>
                <a href="{{ url('https://plus.google.com/+RoadWebfr/posts') }}" target="_blank">
                    <img src="{{asset('images/reseaux-icon/google-plus.png')}}" alt="google +">
                </a>
                <a href="{{ url('https://www.youtube.com/channel/UC29cmztuUzb7CLjqfE6865A/feed') }}" target="_blank">
                    <img src="{{asset('images/reseaux-icon/youtube.png')}}" alt="youtube">
                </a>
                {{--<a href="#">--}}
                    {{--<img src="{{asset('images/reseaux-icon/pinterest.png')}}" alt="pinterest">--}}
                {{--</a>--}}
                {{--<a href="#">--}}
                    {{--<img src="{{asset('images/reseaux-icon/behance.png')}}" alt="behance">--}}
                {{--</a>--}}

            </div>

            <div class="rw-land-footer-copy">
                <p>Copyright 2015 -
                    <a href="#">
                        Association Road Web
                    </a>
                </p>
            </div>
        </div>
    </div>
@stop