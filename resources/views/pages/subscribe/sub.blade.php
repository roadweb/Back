@extends('pages.app')

@section('content')


    <div class="rw-sub-container">

        <div class="rw-sub-header">
            <h1>Bienvenue sur le site de <span>Road-Web</span></h1>

            <h2>Vous souhaitez faire partie de la communauté? <br/>
                Rejoignez nous.</h2>

        </div>

        <div class="rw-sub-content">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Il semble qu'il y ait un problème.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif




            {!! Form::open([
                'url' => url('/admin/auth/register'),
                'method' => 'POST',
                'class' => 'rw-sub-form'
            ]) !!}
            {{--<form action="{{url('/admin/auth/register')}}" role="form" method="POST" class="rw-sub-form">--}}
            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

            <fieldset>
                <input type="text" name="last_name" placeholder="Nom" value="{{ old('last_name') }}"/>
                <input type="text" name="first_name" placeholder="Prénom" value="{{ old('first_name') }}"/>
            </fieldset>

            <fieldset>
                <input type="text" name="username" placeholder="Pseudonyme" value="{{ old('username') }}"/>
                <input type="email" name="email" placeholder="Adresse mail" value=" {{old('email')}}"/>
            </fieldset>


            <fieldset>
                <input type="password" name="password" placeholder="Mot de passe"/>
                <input type="password" name="password_confirmation" placeholder="Confirmation de mot de passe"/>
            </fieldset>

            <fieldset class="rw-sub-select">
                <label for="job_id"></label>
                {!! Form::select('job_id', $jobs, null, ['id' => 'job_id']) !!}

            </fieldset>
            <fieldset class="rw-sub-checkbox">

                <p>
                    {!! Form::checkbox('emweb', 'on', false, ["id" => "emweb"]); !!}

                    <label for="emweb">
            <span class="ui">

            </span>Je suis ou j'ai été élève de l'EMWeb</label>
                </p>
            </fieldset>
            <!---------------------
             validation du formulaire
            ----------------------->

            <button type="submit">Valider</button>
            {!! Form::close() !!}


        </div>

        <div class="rw-sub-advantages">

            <div class="rw-sub-advantages-zone">

                <h3>Une Communauté active</h3>

                <img src="{{asset('images/picto-avantage1.png')}}" alt="icône communauté"/>

                <p>Road-Web est un lieu d'échange et d'entraide pour tous les utilisateurs mais aussi pour les élèves et
                    anciens élèves de l’EmWeb qui participent à son développement. Rejoindre Road-Web c’est intégrer une
                    communauté active dans l’apprentissage et l’évolution des métiers du web.
                </p>

            </div>

            <div class="rw-sub-advantages-zone">

                <h3>Un complément d'apprentissage</h3>

                <img src="{{asset('images/picto-avantage2.png')}}" alt="icône apprentissage"/>

                <p>Road-Web se propose d’être une épaule sur laquelle s’appuyer pour approfondir les connaissances et
                    les compétences liées aux métiers du web. Que vous soyez autodidacte ou faisant partie de l’EmWeb,
                    vous trouverez ici des conseils et des informations qui pourront compléter vos connaissances à votre rythme !
                </p>

            </div>

            <div class="rw-sub-advantages-zone">

                <h3>Des contenus exclusifs</h3>

                <img src="{{asset('images/picto-avantage3.png')}}" alt="icône contenu"/>

                <p>Road-Web est une plate-forme qui se veut complémentaire pour vous dans votre apprentissage. La
                    communauté Road-Web vous donne accès à des contenus spécifiquement écrits et étudiés pour ce site.
                    Le but étant que vous ayez accès à des compléments exclusifs pour accroître vos compétences.
                </p>

            </div>

        </div>


    </div>


@stop