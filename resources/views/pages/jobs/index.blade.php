{{-- Balises HEAD --}}
@section('title')Descriptions des métiers du web selon Road Web.@endsection()
@section('description')Pour en savoir plus sur les métiers du web, lisez nos fiches métiers : webdesigner, developer front-end, référenceur, community manager, webmarketer, webmaster.@endsection()

@extends('pages.app')

@section('content')

    @include('pages.components.header')
    <img class="rw-fond-exagone-top not_mobile" src="{{ asset('images/exagonefond.png')}}"/>


    <div class="container">
    	<div class="rw-jobs-index-container">
            <div>
        		<div>
                    <nav>
                    @foreach($jobs as $job)
                            <a href="#" data-name="#{{$job->id}}" class="rw-link">
                                <img src="{{ asset($job->job_icon) }} " data-name="#{{$job->id}}"/>
                                <h2 class="rw-job-color-txt-{{$job->id}}" data-name="#{{$job->id}}">{{$job->name}}
                                    <span data-name="#{{$job->id}}">
                                        <i class="fa fa-chevron-circle-right not" data-name="#{{$job->id}}"></i>
                                    </span>
                                </h2>
                                <p class="not_mobile" data-name="#{{$job->id}}">{{$job->resume}}</p>
                            </a>
                        @endforeach
                    </nav>

                    <div class="rw-job-view">
                        <div class="rw-jobs-content">
                            <h1 class="rw-jobs-title">Les Métiers du Web</h1>
                            <p>Sur Road-Web, nous vous proposons notre vision du web à travers nos différents métiers. Retrouvez ici les fiches descriptives des différents métiers que regroupe la création dans  le monde du digital et du numérique. Et n’oubliez pas que chaque métier existe grâce aux autres !
                            </p>
                        </div>

                    @foreach($jobs as $job)
                            <div id="{{$job->id}}" class="rw-job-color-{{$job->id}} rw-jobs-hide rw-jobs-content">
                                <h2 class="rw-job-color-txt-{{$job->id}} rw-jobs-title-h2">{{$job->name}}</h2>
                                {!!$job->content!!}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('pages.components.footer')

@stop