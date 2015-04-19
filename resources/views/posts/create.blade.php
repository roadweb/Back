@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ route('posts.index') }}">Articles</a></li>
                <li class="active">Création</li>
            </ol>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
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
                    <form action="{{ route('posts.store') }}" method="post">
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

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="published"> Publier l'article ?
                            </label>
                        </div>

                        <button type="submit" class="btn btn-success">Sauvegarder</button>
                        <button type="reset" class="btn btn-default" href="#">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection()