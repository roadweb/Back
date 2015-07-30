@extends('admin.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                @if(count($posts) > 0)
                    @include('admin.posts.components.articles', ['posts' => $posts])
                @else
                    <div class="alert alert-info">
                        Aucun article n'a encore été publié.
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection