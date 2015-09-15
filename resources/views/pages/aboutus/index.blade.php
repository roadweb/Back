{{-- Balises HEAD --}}
@section('title')Présentation de Road Web et de sa création.@endsection()
@section('description')Un groupe d'élèves de l'EMWeb ont mené le projet Road-Web afin de créer ensemble un site communautaire dédié aux métiers du web pour s'entraider et partager leurs connaissances.@endsection()

@extends('pages.app')
@section('content')
    @include('pages.components.header')
    <img class="rw-fond-exagone-top" src="{{ asset('images/exagonefond.png')}}"/>


    <div class="rw-aboutus-container">

    <div class="rw-aboutus-content">

        <div class="rw-aboutus-content-txt">


            <div class="rw-aboutus-content-img">
                <img src="{{asset('images/avatars/florian.png')}}" alt=""/>
                <img src="{{asset('images/avatars/stephanie.png')}}" alt=""/>
                <img src="{{asset('images/avatars/kevin.png')}}" alt=""/>
            </div>


            <p>
                Au cours d’un évènement Meetup, 2 élèves de l’EMWeb se sont rencontrés. De cette rencontre est née l’idée folle de faire un projet commun avec les volontaires de la communauté EMWeb. Dès lors, ils lancent l’idée sur un réseau social bien connu et quelqu’un propose un thème pour le projet ! Moins de 24 heures après, 20 élèves se retrouvent autour d’un même objectif: la création de Road-Web.
            </p>

            <p>
                L’objectif commun était là, l’outil utilisé pour permettre une collaboration efficace était mis à disposition et les élèves souhaitant participer continuaient de rejoindre le groupe. Nous sommes passés à 40 personnes en quelques jours représentant tous les corps de métiers. Des chefs de projet ainsi que des référents pour chaque corps de métiers ont été nommés et chacun a pu définir la place qui lui convenait pour participer. Au cours des semaines suivantes, nous avons trouvé un nom pour ce projet: Road-Web. De là, le projet est devenu plus concret ! Tous ensemble sur la route du web ! Les mois ont passé et le travail a continué. Road-Web a rapidement eu son identité visuelle d’établi, ses contenus ont commencé à se dessiner et s’étoffer.

            </p>

            <p>
                Nous avons créé l’association Road Web qui regroupe les élèves et anciens élèves de l’EMWeb et leur donne l’opportunité de participer de façon active au projet.
            </p>

            <p>
                6 mois sont passés et Road-Web fait ses premiers pas sur la toile.
                Le site road-web.fr ainsi que l’association se joignent pour vous apporter à tous une autre expérience dans l’apprentissage à distance ou en autodidacte. Beaucoup d’idées d’évolutions du site collaboratif sont déjà en cours de développement.
            </p>

            <p>
                Nous espérons vous apporter pleine satisfaction.

            </p>

            <img class="rw-aboutus-content-txt-pres" src="{{asset('images/avatars/pauline.png')}}" alt=""/>


            <h2>
                Bienvenue sur road-web.fr.
            </h2>


            <p>
                Pauline, <span>Présidente de l’association Road Web</span>
            </p>

        </div>


    </div>

    <div class="rw-aboutus-slide">

    <h3>Ils ont participé au projet:</h3>

        <div class="rw-aboutus-slideshow">
            <ul class="rw-aboutus-sContent">
                <li>
                    <img src="{{ asset('images/avatars/laetitiacaille.jpg') }}" alt="Laetitia Caille" title="Laetitia Caille" />
                </li>
                <li>
                    <img src="{{ asset('images/avatars/valerieottaviano.jpg') }}" alt="Valérie Ottaviano" title="Valérie Ottaviano" />
                </li>
                <li>
                    <img src="{{ asset('images/avatars/celinepeyrot.jpg') }}" alt="Céline Peyrot" title="Céline Peyrot" />
                </li>
                <li>
                    <img src="{{ asset('images/avatars/florianchambolle.jpg') }}" alt="Florian Chambolle" title="Florian Chambolle" />
                </li>
                <li>
                    <img src="{{ asset('images/avatars/paulinelateulere.jpg') }}" alt="Pauline Lateulere" title="Pauline Lateulere" />
                </li>
                <li>
                    <img src="{{ asset('images/avatars/stephaniedesa.jpg') }}" alt="Stéphanie De Sa" title="Stéphanie De Sa" />
                </li>
                <li>
                    <img src="{{ asset('images/avatars/emmanuellehommet.jpg') }}" alt="Emmanuelle Hommet" title="Emmanuelle Hommet" />
                </li>
                <li>
                    <img src="{{ asset('images/avatars/kevinmarques.jpg') }}" alt="Kevin Marques" title="Kevin Marques" />
                </li>

            </ul>

    </div>
</div>
    </div>


    @include('pages.components.footer')
@stop

