@extends('pages.app')

@section('content')

    @include('pages.components.header')

    @include('pages.lognews.lognews')

    <div class="container">        
      @include('pages.carrousel.component.jobnav')
      @include('pages.blog.off.last-articles')
    </div>

    @include('pages.components.footer')

@stop