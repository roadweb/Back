@extends('pages.app')

@section('content')

    @include('pages.components.header')

    <div class="container">

        JE SUIS L'INDEX adhesion
        <br /> <br />

        @include('pages.carrousel.component.jobnav')
        @include('pages.blog.off.last-articles')
    </div>

    @include('pages.components.footer')

@stop