@extends('pages.app')

@section('content')

    @include('pages.components.header')
    <img class="rw-fond-exagone-top" src="{{ asset('images/exagonefond.png')}}"/>

    <div class="container">
        @include('pages.carrousel.index')
        @include('pages.components.last-articles')
        @include('pages.components.last-articles-min')
    </div>

    @include('pages.components.footer')

@stop()