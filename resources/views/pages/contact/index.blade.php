@extends('pages.app')

@section('content')

<div class="container">
    <div class="rw-contact-container">

        <h1>Nous contacter</h1>

        <p>Un souci, une demande, des suggestions ? N'hésitez pas à remplir le formulaire ci-dessous et à nous le faire parvenir ! Nous vous recontacterons par mail au plus vite et ferons notre possible pour régler votre problème :) </p>

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

        @if(Session::has('message'))
    <div class="alert alert-info">
      {{Session::get('message')}}
    </div>
@endif


    <h2>Formulaire à remplir</h2>

    {!! Form::open(array('route' => 'contact_store')) !!}

        <fieldset>

            <div class="rw-contact-field">
                {!! Form::label('prenom', 'Prénom :') !!}
                {!! Form::text('firstname', null, 
                array('required', 
                    'placeholder'=>'Votre Prénom')) !!}
           </div>

            <div class="rw-contact-field">
                {!! Form::label('nom', 'Nom :') !!}
                {!! Form::text('lastname', null, 
                array('required', 
                    'placeholder'=>'Votre Nom')) !!}
            </div>

            <div class="rw-contact-field">
                {!! Form::label('email', 'Email :') !!}
                {!! Form::email('email', null, 
                array('required', 
                    'placeholder'=>'votremail@mail.fr')) !!}
            </div>

            <div class="rw-contact-field">
                {!! Form::label('objet', 'Objet de votre Email :') !!}
                {!! Form::select('objet', array (
                'Site web' => array('bug' => 'Je veux signaler un bug', '?' => '???'),
                'Blog' => array('?' => '???', '?' => '???'),
                'Association' => array('?' => '???', '?' => '???'),
                'Autre' => array('?' => 'Autre')
                )) !!}
            </div>

            <div class="rw-contact-field">
                {!! Form::label('message', 'Message :') !!}
                {!! Form::textarea('message', null, 
                array('required', 
                      'placeholder'=>'Entrez votre message')) !!}
            </div>

            <div class="rw-contact-field">
                {!! Form::label('url', 'Url de la page concernée :') !!}
                {!! Form::url('url', null, 
                array('placeholder'=>'Copiez-collez l\'url de la page concernée si besoin' )) !!}
            </div>

            <div class="rw-sub-input-file-container">
                <p>Capture d'écran :</p>
                <div>
                    {!! Form::label('my-file', 'Joindre une image...', 
                    array('class' => 'rw-sub-input-file-trigger',
                        'tabindex' => '0' )) !!}
                    {!! Form::file('file', ['class' => 'rw-sub-input-file', 'id' => 'my-file']) !!}
                    <p class="rw-sub-file-return"></p>
                </div>
            </div>

            <div class="rw-contact-field">
                {!! Form::checkbox('copie', 'yes', false, 
                    array('id'=>'copie')) !!}
                {!! HTML::decode(Form::label('copie', '<span class="ui"></span> Je désire recevoir une copie de mon message par email')) !!}
                    
                </label>
            </div>
            <div class="rw-contact-field">
                {!! Form::label('envoyer', '', ['class' => 'rw-hidden']) !!}
                {!! Form::submit('Envoyer', 
                array ('required', 
                        'name' => 'envoyer', 
                        'id' => 'envoyer'
                )) !!}
            </div>

        </fieldset>

    {!! Form::close() !!}

    </div>
</div>

@stop