@extends('pages.app')

@section('content')



    <div class="container">

        <div class="rw-allartus-main">

        <h1 class="rw-allartus-title">
            Tous les articles de
            <span>{{$user->username}}</span>
        </h1>

        <div class="rw-allartus-container">

            <section class="rw-allartus-header-flex">
                @foreach ($vignettes as $vignette)
                    <article class="rw-index-open-article-min">
                        <div class="rw-index-open-article-min-date">
                            <p>
                                <span class="rw-index-day">{{ $vignette->created_at->format('d') }}</span>
                                <br />
                                {{ dateConvert($vignette->created_at->format('F')) }}
                                <br />
                                {{ $vignette->created_at->format('Y') }}
                            </p>
                        </div>
                        <div class="rw-index-open-article-min-link rw-job-color-{{ $vignette->job_id }}">
                            <div class="rw-index-open-article-min-title">

                                <a href="../../blog/{{$vignette->id}}" >
                                    {{ str_limit($vignette->title, $limit = 37, $end = '...') }}
                                </a>

                            </div>

                            <div class="rw-index-open-article-min-icons">
                                <img src="{{ asset( $vignette->techno->img_link) }}" />

                            </div>
                        </div>

                        <div class="rw-index-open-article-min-triangle
                        rw-job-color-triangle-{{ $vignette->job_id }}">
                        </div>
                    </article>
                @endforeach
            </section>

            <div class="rw-allartus-header">

                <div class="rw-allartus-header-content">

                    <span>{{$user->first_name}}
                    {{$user->last_name}}
                    alias {{$user->username}}
                    </span>

                    <p class="rw-allartus-header-content-job">
                        {{$user->job->name}}
                    </p>

                    <div class="rw-allartus-header-avatar">
                        <img src="{{ asset( $user->avatar)}}" alt="avatar"/>
                    </div>

                    <p>{{$user->bio}}</p>

                    <div class="rw-allartus-header-rs">
                        <img src="{{ asset('images/reseaux-icon/facebook.png')}}" alt="Facebook"/>
                        <img src="{{ asset('images/reseaux-icon/linkedin.png')}}" alt="Linkedin"/>
                        <img src="{{ asset('images/reseaux-icon/twitter.png')}}" alt="Twitter"/>
                        <img src="{{ asset('images/reseaux-icon/google-plus.png')}}" alt="Twitter"/>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>

@stop
