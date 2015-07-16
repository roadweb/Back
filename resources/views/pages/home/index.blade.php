@extends('pages.app')


@section('content')

    @include('pages.carrousel.component.jobnav')


    <div class="container">
        @include('pages.carrousel.carrousel')
        @include('pages.components.last-articles')
        @include('pages.components.last-articles-min')
    </div>


@endsection()
