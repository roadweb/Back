@extends('pages.app')

@section('content')
    <img class="rw-fond-exagone-top" src="{{ asset('images/exagonefond.png')}}"/>

    @include('pages.components.header')
    @include('pages.blog.components.jobfilter')

    <div class="container">
        @include('pages.components.last-articles')
        @include('pages.components.last-articles-min')
    </div>


@include('pages.components.footer')
@stop
