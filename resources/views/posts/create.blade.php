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
                        <input type="hidden" name="author_id" value="">
                        {{--$table->integer('post_type')->unsigned();--}}
                        {{--$table->integer('author_id')->unsigned();--}}
                        {{--$table->string('published')->default(false);--}}
                        <div class="form-group">
                            <label for="type">Le type d'article</label>
                            <select class="form-control" name="" id="">
                                <option value="1">Article</option>
                                <option value="2">Blog</option>
                                <option value="3">Tutoriel</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Le titre du tutoriel</label>
                            <input type="text" name="title" class="form-control" placeholder="Entrer le titre">
                        </div>
                        <div class="form-group">
                            <label for="text">Le texte du tutoriel</label>
                            <textarea class="form-control" name="content" id="" cols="30" rows="10"></textarea>
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