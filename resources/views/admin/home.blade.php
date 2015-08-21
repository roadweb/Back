@extends('admin.app')

@section('content')
<div class="container rw-admin-charts">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#rw-perso" aria-controls="rw-perso" role="tab" data-toggle="tab">
                                <i class="fa fa-dashboard"></i>
                                <span>
                                    {{$user->username}}
                                </span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#rw-roadweb" aria-controls="rw-roadweb" role="tab" data-toggle="tab">
                                <i class="fa fa-dashboard"></i>
                                <span>
                                    Road-Web
                                </span>
                            </a>
                        </li>
                        {{--@if(Auth::user() && Auth::user()->right_id == '4')--}}
                            {{--<li role="presentation">--}}
                                {{--<a href="#rw-users " aria-controls="rw-users" role="tab" data-toggle="tab">--}}
                                    {{--<i class="fa fa-dashboard"></i>--}}
                                {{--<span>--}}
                                    {{--utilisateurs--}}
                                {{--</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--@endif--}}
                    </ul>
                </div>

                <div class="tab-content">
                    <div role="tabpanel" class="panel-body tab-pane fade in active" id="rw-perso">
                        <h3 class="panel-title">Vos publications :</h3>
                        <p class="panel-info green">Total : {{$user->posts->count()}}</p>
                        <div class="col-md-3">
                            <div class="publi-on-rond bgc-publi-on">
                            <span>
                                {{$user->posts->where('published', 'on')->count()}}
                            </span>
                            </div>
                            <p>
                                publiés
                            </p>
                        </div>
                        <div class="col-md-3">
                            <div class="publi-on-rond bgc-publi-uc">
                            <span>
                                {{$user->posts->where('published', 'uc')->count()}}
                            </span>
                            </div>
                            <p>
                                en attente de validation
                            </p>
                        </div>
                        <div class="col-md-3">
                            <div class="publi-on-rond bgc-publi-0">
                            <span>
                                {{$user->posts->where('published', '0')->count()}}
                            </span>
                            </div>
                            <p>
                                non publiés
                            </p>
                        </div>
                        <div class="col-md-3">
                            <div class="publi-on-rond bgc-publi-sticky">
                            <span>
                                {{$user->posts->where('is_sticky', 'on')->count()}}
                            </span>
                            </div>
                            <p>
                                mis en avant
                            </p>
                        </div>


                        @if($posts->count() != '0')
                        <h2 class="panel-title">Vos <span class="red">6</span> derniers articles :</h2>
                        <div class="col-md-12">
                            <div class="">
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    @foreach($posts as $post)
                                        <div class="col-md-4 col-sm-12 col-lg-4 panel-body">
                                            <div class="rw-charts-cards">
                                                <i class="glyphicon glyphicon-bookmark
                                        txt-publi-{{$post->published}}"></i>
                                                {{($post->job->name)}}

                                                @if($post->is_sticky == 'on')
                                                    <span class="label pull-right label-danger">Fin:
                                                        {{ $post->sticky_end }}
                                                </span>
                                                @else
                                                @endif

                                                <ul class="list-group">
                                                    <li class="list-group-item">
                                                <span>
                                                    <i class="fa fa-angle-double-left"></i>
                                                    {{str_limit($post->title, $limit = 50, $end = '...')}}
                                                    <i class="fa fa-angle-double-right"></i>
                                                </span>
                                                    </li>
                                                    <li class="list-group-item">
                                                <span>
                                                    <i class="glyphicon glyphicon-pencil"></i>
                                                    {{ $post->created_at->format('d') }}
                                                    {{ dateConvert($post->created_at->format('F')) }}
                                                    {{ $post->created_at->format('Y') }}
                                                </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @else
                            <h2 class="panel-title">Vous n'avez pas encore écrit d'articles</h2>

                        @endif
                    </div>

                    <div role="tabpanel" class="panel-body tab-pane fade" id="rw-roadweb">
                        <h3 class="panel-title">Les publications sur Road-Web</h3>
                        <p class="panel-info green">Total : {{$rwposts->count()}}</p>
                        <div class="col-md-3">
                            <div class="publi-on-rond bgc-publi-on">
                                <span>
                                    {{$rwposts->where('published', 'on')->count()}}
                                </span>
                            </div>
                            <p>
                                publiés
                            </p>
                        </div>
                        <div class="col-md-3">
                            <div class="publi-on-rond bgc-publi-uc">
                                <span>
                                    {{$rwposts->where('published', 'uc')->count()}}
                                </span>
                            </div>
                            <p>
                                en attente de validation
                            </p>
                        </div>
                        <div class="col-md-3">
                            <div class="publi-on-rond bgc-publi-0">
                                <span>
                                    {{$rwposts->where('published', '0')->count()}}
                                </span>
                            </div>
                            <p>
                                non publiés
                            </p>
                        </div>
                        <div class="col-md-3">
                            <div class="publi-on-rond bgc-publi-sticky">
                                <span>
                                    {{$rwposts->where('is_sticky', 'on')->count()}}
                                </span>
                            </div>
                            <p>
                                mis en avant
                            </p>
                        </div>
                        <h2 class="panel-title">Les <span class="red">6</span> derniers articles :</h2>
                        <div class="col-md-12">
                            <div class="">
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    @foreach($rwposts as $rwpost)
                                        <div class="col-md-4 col-sm-12 col-lg-4 panel-body">
                                            <div class="rw-charts-cards">
                                                <i class="glyphicon glyphicon-bookmark
                                        txt-publi-{{$rwpost->published}}"></i>
                                                {{($rwpost->job->name)}}

                                                @if($rwpost->is_sticky == 'on')
                                                    <span class="label pull-right label-danger">Fin:
                                                        {{ $rwpost->sticky_end }}
                                                </span>
                                                @else
                                                @endif

                                                <ul class="list-group">
                                                    <li class="list-group-item">
                                                <span>
                                                    <i class="fa fa-angle-double-left"></i>
                                                    {{str_limit($rwpost->title, $limit = 38, $end = '...')}}
                                                    <i class="fa fa-angle-double-right"></i>
                                                </span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <i class="fa fa-user"></i>
                                                        {{$rwpost->user->username}}
                                                    </li>
                                                    <li class="list-group-item">
                                                <span>
                                                    <i class="glyphicon glyphicon-pencil"></i>
                                                    {{ $rwpost->created_at->format('d') }}
                                                    {{ dateConvert($rwpost->created_at->format('F')) }}
                                                    {{ $rwpost->created_at->format('Y') }}
                                                </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="panel-body tab-pane fade" id="rw-users">
                        <h3 class="panel-title">Les utilisateurs de Road-Web</h3>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
