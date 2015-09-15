{{-- Balises HEAD --}}
@section('title')Le blog de RoadWeb parle des métiers du web et des actualités.@endsection()
@section('description')Le blog Road-Web regroupe des articles sur les métiers du web ou sur tout sujet d'actualité web pour apprendre, échanger nos connaissances et astuces.@endsection()

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
