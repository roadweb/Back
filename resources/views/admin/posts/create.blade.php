@extends('admin.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('admin.posts.index') }}">Articles</a> </li>
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

                {!! Form::open(['route' => ['admin.posts.store'], 'id' => 'form-main']) !!}
               
                    {!! Form::hidden('user_id',$auth_id) !!}

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
                                    {!! Form::label('type', 'Le domaine lié de l\'article') !!}
                                    {!! Form::select('job_id', $jobs, null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('type', 'Le type d\'article') !!}
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
                                {!! Form::checkbox('is_sticky', 'on', false, ["id" => "sticky-check", "class" => "checkbox checkbox-success"]) !!}
                                {!! Form::label('sticky-check', 'Mettre en avant ?') !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('sticky', 'Fin de mise en avant') !!}
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
                            {!! Form::label('title','Le titre de l\'article (100 max)') !!}
                            {!! Form::text('title', null, ["class" => "form-control", "placeholder" => "Entrez le titre ici...", "required"])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('content','Le résumé de l\'article (200 max)') !!}
                            {!! Form::textarea('resume', null, ["class" => "form-control", "placeholder" => "Entrez le resume ici...", "size" => "30x3", "maxlength" => "200", "required"])!!}
                        </div>
                        {{--<div class="form-group" ng-app="app" ng-controller="textArea">--}}
                            {{--{!! Form::label('text','Le texte de l\'article') !!}--}}

                            {{--<div name="content" text-angular="text-angular">--}}
                                {{--@if(isset($post))--}}
                                    {{--{!! $post->content !!}--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="form-group">
                            {!! Form::label('content', 'Contenu de l\'article') !!}

                            {!! Form::textarea('content', null, ['class' => 'form-control', 'id' => 'article-ckeditor',
                            'placeholder' => 'Entrez le contenu ici...', 'size' => '30x100', 'required'] )!!}

                        </div>

                        <div class="form-group">
                            {!! Form::label('image','Le lien de l\'image principale d\'illustration de l\'article') !!}
                            {!! Form::url('img_link', null, ["class" => "form-control", "placeholder" => "lien de votre image au format http://nomdelimage.jpg ou http://nomdelimage.png", "required"])!!}
                        </div>


                        <div class="form-group">


                                <div class="checkbox checkbox-success">
                                    {!! Form::checkbox('published', 'uc', false, ["id" => "checkbox1", "class" => "checkbox checkbox-success"]) !!}
                                    {!! Form::label('checkbox1','Soumettre à validation ?') !!}
                                </div>

                        </div>
                    </div>
                </div>

                    <div class="panel panel-default" id="technos">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Le sujet de votre article
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group form-inline">

                                @foreach($technos as $techno)
                                <div class="checkbox checkbox-success">

                                    {!! Form::checkbox('techno[]', $techno->id, null, ["id" => "$techno->id", "class" => "checkbox checkbox-success"]) !!}
                                    {!! Form::label($techno->id,$techno->name) !!}
                                </div>

                                @endforeach
                            </div>
                            <p>Vous pouvez sélectionner jusqu'à <b>3 thèmes</b> maximum. </p>

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
                            Optimisation du référencement</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            {!! Form::label('','Balises alt & title de l\'image principale') !!}
                            {!! Form::text('ref_thumb', null, ["class" => "form-control", "placeholder" => "balise alt de l'image principale de l'article", "required"])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('','Balises alt & title du titre principal de l\'article') !!}
                            {!! Form::text('ref_title', null, ["class" => "form-control", "placeholder" => "balise alt du titre de l'article", "required"])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('','Balise Meta keywords') !!}
                            {!! Form::textarea('ref_description', null, ["class" => "form-control", "placeholder" => "mots clefs séparés par une virgule", "required", "size" => "30x3"])!!}
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>

            <div class="col-xs-3">
                <div data-spy="affix" data-offset-top="100">
                    <div class="panel panel-default">
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
                            <button type="reset" form="form-main" class="btn btn-default rw-btn-red" href="#">Reset</button>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">Informations</div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <span class="glyphicon glyphicon-pushpin"></span> Nous vous offrons la possibilité de mettre votre article en avant : pour cela, indiquez la date de fin de mise en avant dans le champ prévu à cet effet. La date doit être au format <span class="green">aaaa/mm/jj</span>.
                                </li>
                                <li class="list-group-item">
                                    <span class="glyphicon glyphicon-picture"></span> Pour illustrer votre article, copiez-collez le lien de votre image dans le champ prévu à cet effet. Vous pouvez utiliser des sites comme <a href="http://imgur.com/" target="_blank">Imgur</a> ou <a href="http://fr.tinypic.com/" target="_blank">Tinypic</a> pour héberger vos images et récupérer leur lien ('lien direct pour affichage' sur tynipic et 'Direct Link' sur Imgur).
                                </li>
                                <li class="list-group-item">
                                    <span class="glyphicon glyphicon-check"></span> Une fois votre article terminé, ce dernier est sauvegardé sur votre espace utilisateur. Pour qu'un article soit visible sur le site, vous devez le soumettre à validation afin qu'il soit publié par un modérateur ou administrateur du site. 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection()