@extends('admin.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-9">
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
                @if(isset($fiche))
                    {!! Form::model($fiche, ['route' => ['admin.metiers.update', $job->id], 'method' => 'patch', 'id' =>
                    'form-fiches']) !!}
                @else
                    {!! Form::open(['route' => ['admin.metiers.store'], 'id' => 'form-fiches']) !!}
                @endif

                <!--
                |--------------------------------------------------------------------------
                | Informations sur la fiche
                |--------------------------------------------------------------------------
                *-->

                <div class="panel panel-default" id="infos">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Les informations sur la fiche métier
                        </h3>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('type', 'Le domaine lié de l\'article') !!}
                                    {!! Form::select('job_id', $jobs, null, ['class' => 'form-control']) !!}
                                </div>
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
                            {!! Form::label('content','Résumé en une phrase (100 max)') !!}
                            {!! Form::textarea('resume', null, ["class" => "form-control", "placeholder" => "Entrez le resume ici...", "size" => "5x2", "maxlength" => "100", "required"])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('text','Le texte de l\'article') !!}
                            {!! Form::textarea('content', null, ["class" => "form-control", "placeholder" => "Entrez le contenu ici...", "size" => "5x20", "required"])!!}
                        </div>

                    </div>
                </div>

                {!! Form::close() !!}
            </div>

            <div class="col-xs-3">
                <div class="panel panel-default" data-spy="affix" data-offset-top="100">
                    <div class="panel-heading">Action</div>
                    <div class="panel-body" id="list">
                        <ul class="nav nav-pills nav-stacked">
                            <li role="presentation">
                                <a href="#infos"><span class="glyphicon glyphicon-briefcase"></span> Métiers</a>
                            </li>
                            <li role="presentation">
                                <a href="#content"><span class="glyphicon glyphicon-inbox"></span> Contenu</a>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-footer">
                        <button type="submit" form="form-fiches" class="btn btn-success">
                            <span class="glyphicon glyphicon-download-alt"></span> Sauvegarder
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()