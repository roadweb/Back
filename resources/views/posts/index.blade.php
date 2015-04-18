@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                @foreach($posts as $post)
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $post->title }}</div>
                        <div class="panel-body">
                            {{ $post->content }}
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