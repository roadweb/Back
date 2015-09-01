@extends('pages.app')

@section('content')

    @include('pages.components.header')

    <div class="container">
        @include('pages.carrousel.index')
        @include('pages.components.last-articles')
        @include('pages.components.last-articles-min')
    </div>

    @include('pages.components.footer')

@endsection()
