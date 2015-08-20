@extends('pages.app')

@section('content')

    <!--
 développé par Pauline: Inscription : validation d'inscription-->


<div class="rw-sub-container">

    <div class="rw-sub-header rw-subvalid-header">
        <h1>Félicitations <span>{{$user->username}}</span>, nous vous invitons à profiter de nos avantages. </h1>
        <h2>A tout de suite.</h2>

    </div>

    @if($user->emweb === 'on')
    <div class="rw-sub-form-container">
        <p>Vous avez déclaré être élève de l'emweb, vous pouvez donc publier sur le blog de Road-Web. 
        Pour cela, envoyez-nous votre attestation de scolarité afin que nous puissions valider vos droits d'accès.
        </p>

        <ul class="rw-contact-error">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

        {!! Form::open(array('route' => 'envoi_justificatif', 'files' => 'true', 'enctype' => 'multipart/form-data')) !!}

            {!! Form::hidden('username', $user->username) !!}
            {!! Form::hidden('email', $user->email) !!}

            <div class="rw-sub-input-file-container">
                        <div>
                            {!! Form::label('justificatif', 'Joindre votre justificatif (au format png, jpeg ou pdf)', 
                            array('class' => 'rw-sub-input-file-trigger',
                                'tabindex' => '0' )) !!}
                            {!! Form::file('justificatif', ['class' => 'rw-sub-input-file', 'id' => 'justificatif']) !!}
                            <p class="rw-sub-file-return"></p>
                        </div>
            </div>

            {!! Form::submit('Envoyer', 
                ['required', 
                'name' => 'envoyer', 
                'id' => 'envoyer']
            ) !!}
        {!! Form::close() !!}
    </div>
    @endif

    <div class="rw-sub-advantages">

        <div class="rw-sub-advantages-zone">

            <h3>Une Communauté active</h3>

            <img src="{{asset('images/picto-avantage1.png')}}" alt="icône communauté"/>

            <p>Road-Web est un lieu d'échange et d'entraide pour tous les utilisateurs mais aussi pour les élèves et anciens élèves de l’EmWeb qui participent à son développement. Rejoindre Road-Web c’est intégrer une communauté active dans l’apprentissage et l’évolution des métiers du web.
            </p>

        </div>

        <div class="rw-sub-advantages-zone">

            <h3>Un complément d'apprentissage</h3>

            <img src="{{asset('images/picto-avantage2.png')}}" alt="icône apprentissage"/>

            <p>Road-Web se propose d’être une épaule sur laquelle s’appuyer pour approfondir les connaissances et les compétences liées aux métiers du web. Que vous soyez autodidacte ou faisant partie de l’EmWeb, vous trouverez ici des conseils et des informations qui pourront compléter vos connaissances à votre rythme !
            </p>

        </div>

        <div class="rw-sub-advantages-zone">

            <h3>Des contenus exclusifs</h3>

            <img src="{{asset('images/picto-avantage3.png')}}" alt="icône contenu"/>

            <p>Road-Web est une plate-forme qui se veut complémentaire pour vous dans votre apprentissage. La communauté Road-Web vous donne accès à des contenus spécifiquement écrits et étudiés pour ce site. Le but étant que vous ayez accès à des compléments exclusifs pour accroître vos compétences.
            </p>

        </div>

    </div>


</div>


@stop