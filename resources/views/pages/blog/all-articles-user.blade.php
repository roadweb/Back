{{-- Balises HEAD --}}
@section('title')Le blog road-web de {{$user->username}}@endsection()
@section('description')Retrouvez tous les articles écrit par {{$user->username}} sur le bog road-web.fr @endsection()

@extends('pages.app')
@section('content')
    @include('pages.components.header')
    <img class="rw-fond-exagone-top not_mobile" src="{{ asset('images/exagonefond.png')}}"/>

    <div class="container">
        <div class="rw-allartus-main">
            <h1 class="rw-allartus-title">
                Tous les articles de
                <span>{{$user->username}}</span>
            </h1>
            <div class="rw-allartus-container">
                <section class="rw-allartus-header-flex ">
                    @foreach ($vignettes as $vignette)
                        <article class="rw-index-open-article-min">
                            <div class="rw-index-open-article-min-date">
                                <p>
                                    <span class="rw-index-day">{{ $vignette->created_at->format('d') }}</span> <br />
                                    {{ dateConvert($vignette->created_at->format('F')) }} <br />
                                    {{ $vignette->created_at->format('Y') }}
                                </p>
                            </div>
                            <div class="rw-index-open-article-min-link rw-job-color-{{ $vignette->job_id }}">
                                <div class="rw-index-open-article-min-title">
                                    <a href="../../blog/{{ $vignette->id }}/{{urlBeautify($vignette->title)}}" >
                                        {{ str_limit($vignette->title, $limit = 37, $end = '...') }}
                                    </a>
                                </div>
                                <div class="rw-index-open-article-min-icons">
                                    <img src="{{ asset( $vignette->techno1->img_link) }}" />
                                    @if ($vignette->techno2 != null)
                                        <img src="{{ asset( $vignette->techno2->img_link) }}" />
                                    @endif
                                    @if ($vignette->techno3 != null)
                                        <img src="{{ asset( $vignette->techno3->img_link) }}" />
                                    @endif
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
                        <span>{{$user->username}}</span>
                        <div>
                            <span class="rw-allartus-label-state rw-right-color-bgc-{{$user->right_id}}">
                                {{$user->right->name}}
                            </span>
                            @if($user->emweb === 'on')
                                <span class="rw-allartus-label-emweb">
                                    Emweb
                                </span>
                            @endif
                            @if($user->asso != 0)
                                <span class="rw-allartus-label-state-asso">
                                    Road Web Asso
                                </span>
                            @else
                            @endif
                        </div>
                        <span class="rw-allartus-label-post">
                            @if($user->right_id >= 2)
                                @if(count($user->posts->where('published', 'on')) === 1)
                                    <i class="fa fa-pencil-square"></i> {{count($user->posts->where('published', 'on'))}} article publié.
                                @elseif(count($user->posts->where('published', 'on')) > 1)
                                    <i class="fa fa-pencil-square"></i> {{count($user->posts->where('published', 'on'))}} articles publiés.
                                @else
                                    Aucun article publié pour l'instant.
                                @endif
                            @else
                            @endif
                        </span>
                        <span class="rw-allartus-label-inscrit">
                            <i class="fa fa-info-circle"></i>
                            Inscrit depuis le {{$user->created_at->format('d') . ' ' . dateConvert($user->created_at->format('F')) . ' ' . $user->created_at->format('Y')}}
                        </span>
                        <span class="rw-allartus-header-content-job rw-job-color-{{$user->job_id}}">
                            {{$user->job->name}}
                        </span>
                        <div class="rw-allartus-header-avatar">
                            <img src="{{ asset( $user->avatar)}}" alt="avatar"/>
                        </div>
                        <p>{{$user->bio}}</p>
                        <div class="rw-allartus-header-rs">
                            @if(($user->facebook) != '')
                                <a href="{{$user->facebook}}" target="_blank">
                                    <img src="{{ asset('images/reseaux-icon/facebook.png')}}" alt="Facebook" title="Facebook {{$user->username}}"/>
                                </a>
                            @else
                            @endif
                                @if(($user->linkedin) != '')
                                    <a href="{{$user->linkedin}}" target="_blank">
                                        <img src="{{ asset('images/reseaux-icon/linkedin.png')}}" alt="Linkedin" title="Linkedin {{$user->username}}"/>
                                    </a>
                                @else
                                @endif
                                @if(($user->twitter) != '')
                                    <a href="{{$user->twitter}}" target="_blank">
                                        <img src="{{ asset('images/reseaux-icon/twitter.png')}}" alt="Twitter" title="Twitter {{$user->username}}"/>
                                    </a>
                                @else
                                @endif
                                @if(($user->googleplus) != '')
                                    <a href="{{$user->googleplus}}" target="_blank">
                                        <img src="{{ asset('images/reseaux-icon/google-plus.png')}}" alt="Google plus" title="Google+ {{$user->username}}"/>
                                    </a>
                                @else
                                @endif
                                @if(($user->pinterest) != '')
                                    <a href="{{$user->pinterest}}" target="_blank">
                                        <img src="{{ asset('images/reseaux-icon/pinterest.png')}}" alt="Pinterest" title="Pinterest {{$user->username}}"/>
                                    </a>
                                @else
                                @endif
                                @if(($user->behance) != '')
                                    <a href="{{$user->behance}}" target="_blank">
                                        <img src="{{ asset('images/reseaux-icon/behance.png')}}" alt="Behance" title="Behance {{$user->username}}"/>
                                    </a>
                                @else
                                @endif
                                @if(($user->youtube) != '')
                                    <a href="{{$user->youtube}}" target="_blank">
                                        <img src="{{ asset('images/reseaux-icon/youtube.png')}}" alt="Youtube" title="Youtube {{$user->username}}"/>
                                    </a>
                                @else
                                @endif
                                @if(($user->viadeo) != '')
                                    <a href="{{$user->viadeo}}" target="_blank">
                                        <img src="{{ asset('images/reseaux-icon/viadeo.png')}}" alt="Viadeo" title="Viadeo {{$user->username}}"/>
                                    </a>
                                @else
                                @endif
                                @if(($user->instagram) != '')
                                    <a href="{{$user->instagram}}" target="_blank">
                                        <img src="{{ asset('images/reseaux-icon/instagram.png')}}" alt="Instagram" title="Instagram {{$user->username}}"/>
                                    </a>
                                @else
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('pages.components.footer')
@stop
