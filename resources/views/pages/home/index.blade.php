@extends('pages.app')


@section('content')



    <div class="container">
        @include('pages.carrousel.index')
        @include('pages.components.last-articles')
        @include('pages.components.last-articles-min')
    </div>


@endsection()
