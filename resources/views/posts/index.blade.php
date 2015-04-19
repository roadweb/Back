@extends('app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10">
                @if(count($posts) > 0)
                    @include('posts.components.articles', ['posts' => $posts])
                @else
                    <div class="alert alert-info">
                        Aucun article n'a encore été publiés.
                    </div>
                @endif
            </div>
            <div class="col-sm-2">
                <a href="{{ route('posts.create') }}" class="btn btn-success">Créer un nouvel article</a>
            </div>
        </div>
    </div>

@endsection