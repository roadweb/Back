@extends('admin.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                @if(Auth::user()->right_id >= '3' && count($posts) > 0)
                    @include('admin.posts.components.articles', ['posts' => $posts])
                @elseif(Auth::user()->right_id == '2' && count($posts) > 0)
                    @include ('admin.posts.components.articles', ['posts' => $post_user])
                @else
                    <div class="alert alert-info">
                        Aucun article n'a encore été publié.
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection