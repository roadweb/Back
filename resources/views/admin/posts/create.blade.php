@extends('admin.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('admin.posts.index') }}">Articles</a></li>
                    <li class="active">Création</li>
                </ol>
            </div>
        </div>
    </div>

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
                @if(isset($post))
                    {!! Form::model($post, ['route' => ['admin.posts.update', $post->id], 'method' => 'patch', 'id' =>
                    'form-main']) !!}
                @else
                    {!! Form::open(['route' => ['admin.posts.store'], 'id' => 'form-main']) !!}
                @endif

                <input type="hidden" name="user_id" value="{{ $auth_id }}">

                <!--
                |--------------------------------------------------------------------------
                | Informations sur l'article
                |--------------------------------------------------------------------------
                *-->

                <div class="panel panel-default" id="infos">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Les informations sur l'article
                        </h3>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="type">Le domaine lié de l'article</label>
                                    {!! Form::select('job_id', $jobs, null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="type">Le type d'article</label>
                                    {!! Form::select('category_id', $categories, null, ['class' =>
                                    'form-control'])
                                    !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--
                |--------------------------------------------------------------------------
                | Mise en avant
                |--------------------------------------------------------------------------
                *-->

                <div class="panel panel-default" id="sticky">
                    <div class="panel-heading">
                        <h3 class="panel-title">Mise en avant</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="checkbox checkbox-success">
                                {!! Form::checkbox('is_sticky', 'on', false, ["id" => "sticky-check", "class" => "checkbox checkbox-success"]); !!}
                                <label for="sticky-ckeck">
                                    Mettre en avant ?
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sticky">Fin de mise en avant</label>
                            <input type="date" name="sticky_end" class="form-control"/>
                            {!! Form::input('date', 'sticky_end', null, ["class" => "form-control", "placeholder" => "aaaa/mm/jj"])!!}

                        </div>
                    </div>
                </div>

                <!--
                |--------------------------------------------------------------------------
                | Le contenu de l'article
                |--------------------------------------------------------------------------
                *-->
                <div class="panel panel-default" id="content">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-pencil"></span> Le contenu de
                            l'article</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="title">Le titre de l'article (100 max)</label>
                            {!! Form::text('title', null, ["class" => "form-control", "placeholder" => "Entrez le titre ici..."])!!}
                        </div>
                        <div class="form-group">
                            <label for="content">Le résumé de l'article (200 max)</label>
                                     {!! Form::textarea('resume', null, ["class" => "form-control", "placeholder" => "Entrez le resume ici...", "size" => "30x3", "maxlength" => "200"])!!}
                        </div>
                        <div class="form-group" ng-app="app" ng-controller="textArea">
                            <label for="text">Le texte de l'article</label>

                            <div name="content" text-angular="text-angular">
                                @if(isset($post))
                                    {!! $post->content !!}
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="image">Le lien de l'image</label>
                            {!! Form::text('img_link', null, ["class" => "form-control", "placeholder" => "Copiez ici l'url de votre image principale"])!!}
                        </div>

                        <div class="form-group">
                            <div class="checkbox checkbox-success">
                                {!! Form::checkbox('published', 'on', false, ["id" => "checkbox1", "class" => "checkbox checkbox-success"]); !!}

                                <label for="checkbox1">
                                    Publier l'article ?
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!--
                |--------------------------------------------------------------------------
                | Optimisation référencement
                |--------------------------------------------------------------------------
                *-->

                <div class="panel panel-default" id="referencement">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-screenshot"></span>
                            Optimisation du
                            référencement</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Mots clés référencement image</label>
                            {!! Form::text('ref_thumb', null, ["class" => "form-control", "placeholder" => "balise alt de l'image principale de l'article"])!!}
                        </div>
                        <div class="form-group">
                            <label>Balise title</label>
                            {!! Form::text('ref_title', null, ["class" => "form-control", "placeholder" => "balise alt du titre de l'article"])!!}
                        </div>
                        <div class="form-group">
                            <label>Balise description</label>
                            {!! Form::textarea('ref_description', null, ["class" => "form-control", "placeholder" => "mots clefs séparés par une virgule", "row" => "5"])!!}
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
                                <a href="#infos"><span class="glyphicon glyphicon-question-sign"></span> Infos</a>
                            </li>
                            <li role="presentation">
                                <a href="#sticky"><span class="glyphicon glyphicon-question-sign"></span> Mise en avant</a>
                            </li>
                            <li role="presentation">
                                <a href="#content"><span class="glyphicon glyphicon-pencil"></span> Contenu</a>
                            </li>
                            <li role="presentation">
                                <a href="#referencement"><span class="glyphicon glyphicon-screenshot"></span>
                                    Référencement
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-footer">
                        <button type="submit" form="form-main" class="btn btn-success">
                            <span class="glyphicon glyphicon-download-alt"></span> Sauvegarder
                        </button>
                        <button type="reset" form="form-main" class="btn btn-default" href="#">Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()