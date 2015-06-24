@extends('pages.app')

@section('content')

    @include('pages.components.header')

    <div class="container">
      
      JE SUIS L'INDEX OFF DU BLOG
      <br /> <br />
      CARROUSSEL METIERS + CONNEXION (MATHIEU)
      <br />  <br />
      @include('pages.blog.off.last-articles')
    </div>

    @include('pages.components.footer')

@stop