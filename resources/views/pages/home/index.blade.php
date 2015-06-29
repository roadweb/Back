@extends('pages.app')

@section('content')

    @include('pages.components.header')

    <div class="container">
        @include('pages.home.carrousel.carrousel')
        @include('pages.home.last-articles')
    </div>

    @include('pages.components.footer')

    <!--**********************    SECTION "CAROUSSEL"    ***************************-->
    <!--**********************    MATHIEU HO             ***************************-->
    
    <!--****************************************************************************-->

@endsection()
