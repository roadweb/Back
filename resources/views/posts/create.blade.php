@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('posts.index') }}">Articles</a></li>
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
                <form action="{{ route('posts.store') }}" method="post" id="form-main">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="user_id" value="{{ $auth_id }}">

                    <div class="form-group">
                        <label for="type">Le type d'article</label>
                        {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Le titre du tutoriel</label>
                        <input type="text" name="title" class="form-control" placeholder="Entrez le titre ici...">
                    </div>
                    <div class="form-group">
                        <label for="text">Le texte du tutoriel</label>
                            <textarea class="form-control"
                                      name="content"
                                      cols="30"
                                      rows="10"
                                      placeholder="Tapez votre texte ici..."></textarea>
                    </div>
                    <div class="checkbox checkbox-success">
                        <input  id="checkbox1"
                                type="checkbox"
                                class="checkbox checkbox-success"
                                name="published">
                        <label for="checkbox1">
                            Publier l'article ?
                        </label>
                    </div>
                </form>
            </div>

            <div class="col-xs-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Action</div>
                    <div class="panel-body">
                        <button type="submit" form="form-main" class="btn btn-success">Sauvegarder</button>
                        <button type="reset" form="form-main" class="btn btn-default" href="#">Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()