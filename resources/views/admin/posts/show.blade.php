@extends('admin.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>
                    <span class="rw-show-panel">Prévisualisation de mon article : </span>
                    {{ $post->title }}</h4>
            </div>
            <div class="panel-body">

                <p class="col-sm-3">
                    <span class="rw-show-panel">Auteur : </span>{{ $post->user->first_name }} {{$post->user->last_name}}</p>

                <p class="col-sm-7">
                    <span class="rw-show-panel">Description : </span>{{ $post->resume }}</p>

                <p class="col-sm-2">
                    <span class="rw-show-panel">Créé le : </span>
                    {{$post->created_at->format('d')}}
                    {{dateConvert($post->created_at->format('F'))}}
                    {{$post->created_at->format('Y')}}
                </p>

            </div>
        </div>

        <div class="rw-blog-article-main-container">
    <div class="rw-blog-article-container rw-job-color-{{$post->job_id}}">
        <div class="rw-blog-article-content-fct rw-job-color-bgc-{{$post->job_id}}">

                    <span>
                        <i class="fa fa-clock-o"></i> $temps min
                    </span>

                <span>
                    <p>
                        Partagez !
                    </p>
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-google-plus"></i>
                        <i class="fa fa-linkedin"></i>
                </span>

                    <span>
                        <i class="fa fa-font"></i>
                        <i class="fa fa-font"></i>
                        <i class="fa fa-print"></i>
                    </span>

        </div>
        <div class="rw-blog-article-header">

            <div class="rw-blog-article-header-date">
                <p class="rw-blog-article-header-date-red">{{$post->created_at->format('d')}}</p>

                <p>{{dateConvert($post->created_at->format('F'))}}</p>

                <p>{{ $post->created_at->format('Y') }}</p>
            </div>


            <h4> {{ $post->title }}</h4>


        </div>

        <div class="rw-blog-article-content">

            <img src="{{$post->img_link}}" alt="{{ $post->img_alt }}"/>

            <p> {!! $post->content !!} </p>

            <p class="rw-blog-article-content-auth rw-job-color-txt-{{$post->job_id}}"> {{ $post->user->username }}</p>

        </div>
        <div class="rw-bdc-triangle rw-job-color-triangle-{{$post->job_id}}"></div>
    </div>

    </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>
                    <span class="rw-show-panel">Autres infos concernant mon article : </span>
                    {{ $post->title }}</h4>
            </div>
            <div class="panel-body">

                <p class="col-sm-2">
                    <span class="rw-show-panel">Date de fin de mise en avant : </span>{{ $post->sticky_end }}</p>

                <p class="col-sm-6">
                    <span class="rw-show-panel">Mots clefs : </span>{{ $post->ref_description }}</p>

                <p class="col-sm-2">
                    <span class="rw-show-panel">Balises alt titre : </span> {{$post->ref_title}} <br/>
                </p>
                <p class="col-sm-2">
                    <span class="rw-show-panel">Balises alt image principale :</span> {{ $post->ref_thumb }}
                </p>

            </div>
        </div>

    </div>
@endsection()