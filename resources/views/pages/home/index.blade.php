{{-- Balises HEAD --}}
@section('title')Road Web le site collaboratif des méiers du numérique. @endsection()
@section('description')Road-Web est un site communautaire rassemblant des élèves et des professionnels juniors dans les métiers du web : fiches métiers, articles autour du web…@endsection()

@extends('pages.app')

@section('content')

    @include('pages.components.header')
    <img class="rw-fond-exagone-top not_mobile" src="{{ asset('images/exagonefond.png')}}"/>

    <div class="container">
        @include('pages.carrousel.index')
        @include('pages.components.last-articles')
        @include('pages.components.last-articles-min')
    </div>

    @include('pages.components.footer')

@stop()