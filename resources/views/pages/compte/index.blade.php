@extends('pages.app')

@section('content')
    @include('pages.components.header')
    <img class="rw-fond-exagone-top" src="{{ asset('images/exagonefond.png')}}"/>

    <div class="rw-cpt-main-container">
        <div class="rw-cpt-header">

            @if(Session::has('message'))
            <p class="rw-cpt-success">
                {{Session::get('message')}}
            </p>
            @endif

            <h1>Compte de <span>{{ $user->first_name }}</span></h1>
            <p class="rw-cpt-created">Inscrit depuis le {{$user->created_at->format('d') . ' ' . dateConvert($user->created_at->format('F')) . ' ' . $user->created_at->format('Y')}}</p>
                <p class="rw-cpt-created">
                    @if($user->asso != 0)
                    <span class="rw-cpt-created-asso">
                        Road Web asso
                    </span>
                    @else
                    @endif
                    <span class="rw-right-color-bgc-{{$user->right_id}}">
                        {{ $user->right->name }}
                    </span> | Mon blog Road-Web : <a
                                href="http://road-web.fr/monblog/{{$user->id}}/{{$user->username}}">
                            http://road-web.fr/monblog/{{$user->id}}/{{$user->username}}
                        </a>
                </p>
            <!--
             Bouton en attendant de faire la page plume!
            -->
            @if (Auth::user()->right_id >= '2')
                <a href="{{url('/admin/posts')}}">
                    <button id="rw-cpt-button" title="Accès au CMS">Ecrire un article</button>
                </a>
                @endif
                        <!--
                 fin bouton en attendant la page plume!
                -->

                <a href="{{URL::to('/monblog', ['id' => $user->id, 'username' => $user->username])}}">
                    <button id="rw-cpt-button" title="Accès à mon blog RW">Ma vue publique</button>
                </a>

        </div>

        <div class="rw-cpt-content">
            <div class="rw-cpt-content-profil">

                <h2>Mes informations</h2>


                <button id="rw-cpt-button-infos">Editer mes informations</button>

            @if(isset($user))
                {!! Form::model($user, ['route' => ['compte.update', $user->id], 'method' => 'patch']) !!}

                @else
                    {!! Form::open(['route' => ['compte.store']]) !!}
                @endif


                <div>
                    <div class="rw-cpt-label-container">
                        <i class="fa fa-user rw-cpt-label-no"></i>
                        {!! Form::label('first_name','Prénom') !!}
                        <span class="rw-cpt-label"> {{$user->first_name}}</span>
                    </div>
                    {{--{!! Form::text('first_name', null, ["class" => "rw-cpt-input", "placeholder" => "Prénom", "required"])!!}--}}

                    <div class="rw-cpt-label-container">
                        <i class="fa fa-user rw-cpt-label-no"></i>
                        {!! Form::label('last_name','Nom') !!}
                        <span class="rw-cpt-label"> {{$user->last_name}}</span>
                    </div>
                    {{--{!! Form::text('last_name', null, ["class" => "rw-cpt-input", "placeholder" => "Nom", "required"])!!}--}}

                    <div class="rw-cpt-label-container">
                        <i class="fa fa-envelope rw-cpt-label-no"></i>
                        {!! Form::label('email','Email') !!}
                        <span class="rw-cpt-label"> {{$user->email}}</span>
                    </div>
                    {{--{!! Form::text('email', null, ["class" => "rw-cpt-input", "placeholder" => "Email de contact", "required"])!!}--}}
                </div>

                <div class="rw-cpt-label-container">
                    <i class="fa fa-user"></i>
                    {!! Form::label('username','Pseudo') !!}
                    <span class="rw-cpt-label"> {{$user->username}}</span>
                </div>
                {!! Form::text('username', null, ["class" => "rw-cpt-input", "placeholder" => "Pseudo", "required"])!!}

                <div>
                    <div class="rw-cpt-label-container">
                        <i class="fa fa-facebook-official"></i>
                        @if(($user->facebook) == '')
                            {!! Form::label('facebook','Facebook') !!}
                        @else
                            <span class="rw-cpt-label"> {{$user->facebook}}</span>
                        @endif
                    </div>
                    {!! Form::text('facebook', null, ["class" => "rw-cpt-input", "placeholder" => "Facebook"])!!}
                </div>

                <div>
                    <div class="rw-cpt-label-container">
                        <i class="fa fa-twitter-square"></i>
                        @if(($user->twitter) == '')
                            {!! Form::label('twitter','Twitter') !!}
                        @else
                            <span class="rw-cpt-label"> {{$user->twitter}}</span>
                        @endif
                    </div>
                    {!! Form::text('twitter', null, ["class" => "rw-cpt-input", "placeholder" => "Twitter"])!!}
                </div>

                <div>
                    <div class="rw-cpt-label-container">
                        <i class="fa fa-linkedin-square"></i>
                        @if(($user->linkedin) == '')
                            {!! Form::label('linkedin','Linkedin') !!}
                        @else
                            <span class="rw-cpt-label"> {{$user->linkedin}}</span>
                        @endif
                    </div>
                    {!! Form::text('linkedin', null, ["class" => "rw-cpt-input", "placeholder" => "Linkedin"])!!}
                </div>

                <div>
                    <div class="rw-cpt-label-container">
                        <i class="fa fa-google-plus-square"></i>
                        @if(($user->googleplus) == '')
                            {!! Form::label('googleplus','Google +') !!}
                        @else
                            <span class="rw-cpt-label"> {{$user->googleplus}}</span>
                        @endif
                    </div>
                    {!! Form::text('googleplus', null, ["class" => "rw-cpt-input", "placeholder" => "Google +"])!!}
                </div>

                <div>
                    <div class="rw-cpt-label-container">
                        <i class="fa fa-pinterest-square"></i>
                        @if(($user->pinterest) == '')
                            {!! Form::label('pinterest','Pinterest') !!}
                        @else
                            <span class="rw-cpt-label"> {{$user->pinterest}}</span>
                        @endif
                    </div>
                    {!! Form::text('pinterest', null, ["class" => "rw-cpt-input", "placeholder" => "Pinterest"])!!}
                </div>

                <div>
                    <div class="rw-cpt-label-container">
                        <i class="fa fa-behance-square"></i>
                        @if(($user->behance) == '')
                            {!! Form::label('behance','Behance') !!}
                        @else
                            <span class="rw-cpt-label"> {{$user->behance}}</span>
                        @endif
                    </div>
                    {!! Form::text('behance', null, ["class" => "rw-cpt-input", "placeholder" => "Behance"])!!}
                </div>

                <div>
                    <div class="rw-cpt-label-container">
                        <i class="fa fa-youtube-square"></i>
                        @if(($user->youtube) == '')
                            {!! Form::label('youtube','Youtube') !!}
                        @else
                            <span class="rw-cpt-label"> {{$user->youtube}}</span>
                        @endif
                    </div>
                    {!! Form::text('youtube', null, ["class" => "rw-cpt-input", "placeholder" => "Youtube"])!!}
                </div>

                <div>
                    <div class="rw-cpt-label-container">
                        <i class="fa fa-share-alt-square"></i>
                        @if(($user->viadeo) == '')
                            {!! Form::label('viadeo','Viadeo') !!}
                        @else
                            <span class="rw-cpt-label"> {{$user->viadeo}}</span>
                        @endif
                    </div>
                    {!! Form::text('viadeo', null, ["class" => "rw-cpt-input", "placeholder" => "Viadeo"])!!}
                </div>

                <div>
                    <div class="rw-cpt-label-container">
                        <i class="fa fa-instagram"></i>
                        @if(($user->instagram) == '')
                            {!! Form::label('instagram','Instagram') !!}
                        @else
                            <span class="rw-cpt-label"> {{$user->instagram}}</span>
                        @endif
                    </div>
                    {!! Form::text('instagram', null, ["class" => "rw-cpt-input", "placeholder" => "Instagram"])!!}
                </div>



                <div>
                    <div class="rw-cpt-label-container">
                        <i class="fa fa-book"></i>
                        {!! Form::label('bio','Ma Bio') !!}
                        <span class="rw-cpt-label-textarea"> {{$user->bio}}</span>
                    </div>
                    {!! Form::textarea('bio', null, ["class" => "rw-cpt-textarea", "placeholder" => "Quelques mots sur moi..", "size" => "5x10", "maxlength" => "200"])!!}
                </div>
                <div>
                    {!! Form::submit('Sauvegarder les informations', ["id" => "rw-cpt-btn-submit-infos"]) !!}

                </div>
                {!! Form::close() !!}

            </div>
                <div class="rw-cpt-content-profil">


                <h2>Mon avatar</h2>

                <div class="rw-cpt-content-avatar">

                    <img class="rw-cpt-avatar" src="{{$user->avatar}}" alt="{{$user->username}}"/>
                    <button id="rw-cpt-button-avatar" class="rw-cpt-button-avatar">Modifier mon avatar</button>

                 </div>

                    {!! Form::model($user, ['route' => ['avatar_update'], 'method' => 'patch', 'files' => true, 'enctype' => 'multipart/form-data' ]) !!}

                        {!! Form::hidden('id', $user->id) !!}

                        <div class="rw-cpt-input-file-container">
                            {!! Form::label('avatar', 'Joindre une image...', 
                                ['class' => 'rw-sub-input-file-trigger',
                                'tabindex' => '0']
                            ) !!}
                            {!! Form::file('avatar', ['class' => 'rw-sub-input-file', 'id' => 'avatar']) !!}
                            <p class="rw-sub-file-return"></p>

                        </div>

                    {!! Form::submit('Enregistrer l\'avatar', ['id' => 'rw-cpt-btn-submit-avatar']) !!}
                   

                    {!! Form::close() !!}
                    <ul class="rw-cpt-error">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                    @if(Session::has('message-avatar'))
                        <p class="rw-contact-success">
                            {{Session::get('message-avatar')}}
                        </p>
                    @endif
                </div>


                @if(($user->emweb === 'on') && ($user->right_id === 1))        
                <h2>Mon justificatif</h2>

                <p>Vous avez déclaré être inscrit à l'Emweb. Pour que nous puissions gérer vos droits et ainsi vous permettre de publier des articles sur Road-web, merci de nous faire parvenir votre attestation d'inscription à l'école (certificat de scolarité au format png, jpg ou pdf) :)</p>

                <div class="rw-cpt-content-justificatif">
                    {!! Form::open(array('route' => 'envoi_justif', 'files' => 'true', 'enctype' => 'multipart/form-data')) !!}

                    {!! Form::hidden('username', $user->username) !!}
                    {!! Form::hidden('email', $user->email) !!}

                    <div class="rw-subvalid-input-file-container">
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

                    @if(Session::has('message-justif'))
                        <p class="rw-contact-success">
                            {{Session::get('message-justif')}}
                        </p>
                    @endif

                </div>

                @endif

    <!---------------------
fin content
----------------------->
    </div>

    <!---------------------
     fin container main
    ----------------------->
    </div>

    @include('pages.components.footer')
@stop