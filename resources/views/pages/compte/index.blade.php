@extends('pages.app')

@section('content')

    <div class="rw-cpt-main-container">
        <div class="rw-cpt-header">

            <h1>Compte de <span>{{ $user->username }}</span></h1>

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
                    {{--{!! Form::label('first_name','Prénom') !!}--}}
                    {!! Form::text('first_name', null, ["class" => "rw-cpt-input", "placeholder" => "Prénom"])!!}
                </div>

                <div>
                    {{--{!! Form::label('last_name','Nom') !!}--}}
                    {!! Form::text('last_name', null, ["class" => "rw-cpt-input", "placeholder" => "Nom"])!!}
                </div>

                <div>
                    {{--{!! Form::label('username','Pseudo') !!}--}}
                    {!! Form::text('username', null, ["class" => "rw-cpt-input", "placeholder" => "Pseudo"])!!}
                </div>

                <div>
                    {{--{!! Form::label('email','Email') !!}--}}
                    {!! Form::text('email', null, ["class" => "rw-cpt-input", "placeholder" => "Email de contact"])!!}
                </div>

                <div>
                    {{--{!! Form::label('created_at','Date d\'inscription') !!}--}}
                    {!! Form::text('created_at', null, ["class" => "rw-cpt-input", "placeholder" => "Date d'inscription"])!!}
                </div>

                <div>
                    {{--{!! Form::label('abonnement','abonnement') !!}--}}
                    {!! Form::text('right_name', null, ["class" => "rw-cpt-input", "placeholder" => $user->right->name])!!}
                </div>

                <div>
                    {{--{!! Form::label('abonnement','Blog road-web') !!}--}}
                    {!! Form::text('blog', null, ["class" => "rw-cpt-input", "placeholder" => "http://road-web.fr/monblog/$user->id/$user->username"])!!}
                </div>

                <div>
                    {{--{!! Form::label('bio','Ma Bio(200 max)') !!}--}}
                    {!! Form::textarea('bio', null, ["class" => "rw-cpt-textarea", "placeholder" => "Quelques mots sur moi..", "size" => "5x10", "maxlength" => "200"])!!}
                </div>
                {!! Form::submit('Sauvegarder les informations', ["id" => "rw-cpt-btn-submit-infos"]) !!}

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