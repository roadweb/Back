@extends('admin.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">{{ $post->title }}</div>
            <div class="panel-body">
                Basic panel example
            </div>
        </div>
        <p>{{ $post->id }}</p>
        <p>{{ $post->title }}</p>
        <p>{{ $post->resume }}</p>
        <span>{!! $post->content !!}</span>
        <p>{{ $post->is_sticky }}</p>
        <p>{{ $post->sticky_end }}</p>
        <p>{{ $post->published }}</p>
        <p>{{ $post->ref_title }}</p>
        <p>{{ $post->ref_thumb }}</p>
        <p>{{ $post->ref_description }}</p>
        <p>{{ $post->created_at }}</p>
        <p>{{ $post->updated_at }}</p>
        <p>{{ $post->job->name }}</p>
        <p>{{ $post->user->username }}</p>
    </div>
@endsection()