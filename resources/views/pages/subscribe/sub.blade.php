@extends('pages.app')

@section('content')

    @include('pages.components.header')
    <img class="rw-fond-exagone-top" src="{{ asset('images/exagonefond.png')}}"/>

    <div class="rw-sub-container">

        <div class="rw-sub-header">
            <h1>Bienvenue sur le site de <span>Road-Web</span></h1>

            <h2>Vous souhaitez faire partie de la communauté? <br/>
                Rejoignez nous.</h2>

        </div>

        <div class="rw-sub-content">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops !</strong> Il semble qu'il y ait un problème.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {!! Form::open([
                'url' => url('/auth/register'),
                'method' => 'POST',
                'class' => 'rw-sub-form'
            ]) !!}
           
            <fieldset>
                {!! Form::label('nom', '', ['class' => 'rw-hidden']) !!}
                {!! Form::text('last_name', old('last_name'), 
                    ['required', 
                    'placeholder'=>'Nom']
                ) !!}

                {!! Form::label('prenom', '', ['class' => 'rw-hidden']) !!}
                {!! Form::text('first_name', old('first_name'), 
                    ['required', 
                    'placeholder'=>'Prénom']
                ) !!}
               
            </fieldset>

            <fieldset>
                {!! Form::label('pseudo', '', ['class' => 'rw-hidden']) !!}
                {!! Form::text('username', old('username'), 
                    ['required', 
                    'placeholder'=>'Pseudonyme']
                ) !!}

                {!! Form::label('email', '', ['class' => 'rw-hidden']) !!}
                {!! Form::email('email', old('email'), 
                    ['required', 
                    'placeholder'=>'Adresse mail']
                ) !!}
            </fieldset>


            <fieldset>
                {!! Form::label('password', '', ['class' => 'rw-hidden']) !!}
                {!! Form::password('password',
                    ['required', 
                    'placeholder'=>'Mot de passe']
                ) !!}

                {!! Form::label('password_confirmation', '', ['class' => 'rw-hidden']) !!}
                {!! Form::password('password_confirmation', 
                    ['required', 
                    'placeholder'=>'Confirmation du passe']
                ) !!}

            </fieldset>

            <fieldset class="rw-sub-select">
                {!! Form::label('job_id', '', ['class' => 'rw-hidden']) !!}
                {{--{!! Form::select('job_id', $jobs->name, null, ['id' => 'job_id']) !!}--}}
                <select name="job_id" id="job_id">
                        <option selected value="" disabled>Indiquez votre métier / formation</option>
                    @foreach($jobs as $job)
                        <option value="{{$job->id}}">{{$job->name}}</option>
                    @endforeach
                </select>

            </fieldset>
            <fieldset class="rw-sub-checkbox">

                <p>
                    {!! Form::checkbox('emweb', 'on', false, ["id" => "emweb"]) !!}

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

    @include('pages.components.footer')

@stop