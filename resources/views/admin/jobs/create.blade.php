@extends('admin.app')

@section('content')

    <div class="container-fluid rw-metiers-create">
        <div class="row">
            <div class="col-xs-12">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Il y'a un problème avec les données envoyées!<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(isset($fiches))
                    {!! Form::model($fiches, ['route' =>['admin.metiers.update', $fiches->id], 'method' => 'patch', 'id' => 'form-fiches']) !!}
                    @endif


                    {!! Form::hidden('job_id',$fiches->id) !!}

                    <!--
                    |--------------------------------------------------------------------------
                    | Informations sur la fiche
                    |--------------------------------------------------------------------------
                    *-->

                <div class="panel panel-default" id="infos">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-sm-2">
                                    <img src="{{ asset($fiches->job_icon) }}" alt="{{$fiches->name}}" class="rw-metiers-create-img"/>
                            </div>
                            <div class="col-sm-8">
                                    <h1 class="rw-job-color-txt-{{$fiches->id}}">
                                        {{ $fiches->name }}
                                    </h1>
                            </div>
                            <div class="col-sm-2 rw-metiers-create-date">
                                    <p>
                                        <span>
                                            Création :
                                        </span>
                                        {{$fiches->created_at->format('d')}}
                                        {{dateConvert($fiches->created_at->format('F'))}}
                                        {{$fiches->created_at->format('Y')}}
                                    </p>
                                    <p>
                                        <span>
                                        Mise à jour :
                                        </span>
                                        {{$fiches->updated_at->format('d')}}
                                        {{dateConvert($fiches->updated_at->format('F'))}}
                                        {{$fiches->updated_at->format('Y')}}

                                    </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!--
                |--------------------------------------------------------------------------
                | Le contenu de la fiche métier
                |--------------------------------------------------------------------------
                *-->
                <div class="panel panel-default" id="content">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-pencil"></span> Le contenu de
                            la fiche métier</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            {!! Form::label('resume','Résumé en une phrase (100 max)') !!}
                            {!! Form::text('resume', null, ["class" => "form-control", "placeholder" => "$fiches->resume", "required"])!!}
                        </div>
                        {{--<div class="form-group" ng-app="app" ng-controller="textArea">--}}

                            {{--{!! Form::label('text','Le contenu de la fiche') !!}--}}

                            {{--<div name="content" text-angular="text-angular">--}}

                                {{--@if(isset($fiches))--}}
                                    {{--{!! $fiches->content !!}--}}
                                {{--@endif--}}

                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="form-group">
                            {!! Form::label('content', 'Contenu de la page') !!}

                            {!! Form::textarea('content', null, ['class' => 'form-control', 'id' => 'article-ckeditor',
                            'placeholder' => 'Entrez le contenu ici...', 'size' => '30x100', 'required'] )!!}

                        </div>


                    </div>
                </div>

                {!! Form::close() !!}
            </div>

            <div class="col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <button type="submit" form="form-fiches" class="btn btn-success center-block">
                            <span class="glyphicon glyphicon-download-alt"></span> Sauvegarder
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()