@extends('pages.app')

@section('content')

    @include('pages.components.header')

    <div class="container">
      
      JE SUIS L'INDEX OFF DU BLOG
      <br /> <br />
        
      @include('pages.home.carrousel.component.jobnav')
      @include('pages.blog.off.last-articles')
    </div>

    @include('pages.components.footer')

@stop