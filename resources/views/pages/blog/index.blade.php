@extends('pages.app')

@section('content')

    @include('pages.blog.components.jobfilter')

    <div class="container">
        @include('pages.components.last-articles')
        @include('pages.components.last-articles-min')
    </div>

@stop