@extends('pages.app')

@section('content')

    @include('pages.components.header')

    @include('pages.lognews.lognews')

    <div class="container">
        @include('pages.carrousel.carrousel')
        @include('pages.home.last-articles')
    </div>

    @include('pages.components.footer')

@endsection()
