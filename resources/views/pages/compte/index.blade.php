@extends('pages.app')

@section('content')

    <div class="rw-cpt-main-container">
        <div class="rw-cpt-header">

            <h1>Compte de <span>{{ $user->first_name }}</span></h1>
            <p class="rw-cpt-created">Inscrit depuis le {{$user->created_at->format('d') . ' ' . dateConvert($user->created_at->format('F')) . ' ' . $user->created_at->format('Y')}}</p>
                <p class="rw-cpt-created">
                    @if($user->asso != 0)
                    <span class="rw-job-color-txt-{{$user->job_id}}">
                        Road Web asso
                    </span>
                    @else
                    @endif
                    <span class="rw-right-color-bgc-{{$user->right_id}}">
                        {{ $user->right->name }}
                    </span> | Mon blog Road-Web : http://road-web.fr/monblog/{{$user->id}}/{{$user->username}}
                </p>
            <!---------------------
             Bouton en attendant de faire la page plume!
            ----------------------->
            @if (Auth::user()->right_id >= '2')
                <a href="{{url('/admin/posts')}}">
                    <button id="rw-cpt-button" title="Accès au CMS">Ecrire un article</button>
                </a>
                @endif
                        <!---------------------
                 fin bouton en attendant la page plume!
                ----------------------->

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


                {{--{!! Form::model($user, ['route' => ['admin.users.update', $user->id], 'method' => 'patch', 'id' => '', 'files' => true ]) !!}--}}


                <div class="rw-cpt-content-avatar">

                    <img class="rw-cpt-avatar" src="{{$user->avatar}}" alt="{{$user->username}}"/>

                    {{--{!! Form::submit('Sauvegarder les informations', ["id" => "rw-cpt-btn-submit-avatar"]) !!}--}}

                    

                    {{--{!! Form::close() !!}--}}


                </div>




                {{--<button id="rw-cpt-button-avatar">Editer mes informations</button>--}}
            </div>







    <!---------------------
fin content
----------------------->
    </div>

    <!---------------------
     fin container main
    ----------------------->
    </div>



@stop