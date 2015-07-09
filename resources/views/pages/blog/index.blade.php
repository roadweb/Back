@extends('pages.app')

@section('content')

    @include('pages.components.header')

    @include('pages.lognews.lognews')

    <div class="container">

    	@include('pages.carrousel.component.jobnav')
        @include('pages.components.last-articles')
        @include('pages.components.last-articles-min')

    </div>

    @include('pages.components.footer')

@stop