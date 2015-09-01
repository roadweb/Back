@extends('pages.app')

@section('content')

    @include('pages.components.header')
    @include('pages.blog.components.jobfilter')

    <div class="container">
        @include('pages.components.last-articles')
        @include('pages.components.last-articles-min')
    </div>


@include('pages.components.footer')
@stop
