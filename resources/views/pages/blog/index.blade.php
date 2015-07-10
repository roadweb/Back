@extends('pages.app')

@section('content')



    <div class="container">

    	@include('pages.carrousel.component.jobnav')
        @include('pages.components.last-articles')
        @include('pages.components.last-articles-min')

    </div>


@stop