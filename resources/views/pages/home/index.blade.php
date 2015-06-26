@extends('pages.app')

@section('content')

    @include('pages.components.header')

    @include('pages.home.carrousel.carrousel')

    <div class="container">
        @include('pages.home.last-articles')
    </div>

    @include('pages.components.footer')

    <!--**********************    SECTION "CAROUSSEL"    ***************************-->
    <!--**********************    MATHIEU HO             ***************************-->
    
    <!--****************************************************************************-->

@endsection()
