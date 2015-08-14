@extends('pages.app')

@section('content')

    <div class="rw-cpt-main-container">
        <div class="rw-cpt-header">

            <h1>Compte de <span>{{ $user->first_name }}</span></h1>
            <p class="rw-cpt-created">Inscrit depuis le {{$user->created_at->format('d') . ' ' . dateConvert($user->created_at->format('F')) . ' ' . $user->created_at->format('Y')}}</p>
                <p class="rw-cpt-created">
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
                    {{--{!! Form::label('first_name','Prénom') !!}--}}
                    {!! Form::text('first_name', null, ["class" => "rw-cpt-input", "placeholder" => "Prénom", "required"])!!}
                </div>

                <div>
                    {{--{!! Form::label('last_name','Nom') !!}--}}
                    {!! Form::text('last_name', null, ["class" => "rw-cpt-input", "placeholder" => "Nom", "required"])!!}
                </div>

                <div>
                    {{--{!! Form::label('username','Pseudo') !!}--}}
                    {!! Form::text('username', null, ["class" => "rw-cpt-input", "placeholder" => "Pseudo", "required"])!!}
                </div>

                <div>
                    {{--{!! Form::label('email','Email') !!}--}}
                    {!! Form::text('email', null, ["class" => "rw-cpt-input", "placeholder" => "Email de contact", "required"])!!}
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