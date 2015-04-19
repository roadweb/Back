@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                @foreach($posts as $post)
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    {{ $post->title }}
                                    <span class="pull-right"><small>Mis à jour le : {{ $post->updated_at }}</small></span>
                                </div>
                                <div class="panel-body">
                                    {{ $post->content }}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Auteur: {{ $post->author->last_name }} {{ $post->author->first_name }}
                                    <span class="pull-right">
                                        <span class="label label-info">{{ $post->category->name }}</span>
                                    </span>
                                </div>
                                <div class="panel-body">
                                    {!! Form::open([
                                        'url' => route('posts.destroy', $post->id),
                                        'method' => 'DELETE',
                                    ]) !!}
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default">Editer</a>
                                    <button class="btn btn-danger" type="submit">Suprimer</button>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-sm-2">
                <a href="{{ route('posts.create') }}" class="btn btn-success">Créer un nouvel article</a>
            </div>
        </div>
    </div>

@endsection