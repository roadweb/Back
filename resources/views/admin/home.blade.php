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
                        @if(Auth::user() && Auth::user()->right_id == '4')
                            <li role="presentation">
                                <a href="#rw-users " aria-controls="rw-users" role="tab" data-toggle="tab">
                                    <i class="fa fa-dashboard"></i>
                                <span>
                                    utilisateurs
                                </span>
                                </a>
                            </li>
                        @endif
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
                                                    {{str_limit($post->title, $limit = 38, $end = '...')}}
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
                        <h2 class="panel-title">Les utilisateurs de Road-Web</h2>
                        <p class="panel-info green">Inscrits : {{$charts->count()}}</p>
                        <div class="col-md-3">
                            <div class="user-arrond rw-job-color-bgc-1">
                                <span>
                                    {{$chartmembre->count()}}
                                </span>
                            </div>
                            <p class="txt-user">
                                membres
                            </p>
                        </div>
                        <div class="col-md-3">
                            <div class="user-arrond rw-job-color-bgc-2">
                                <span>
                                    {{ $chartauteur->count()}}
                                </span>
                            </div>
                            <p class="txt-user">
                                auteurs
                            </p>
                        </div>
                        <div class="col-md-3">
                            <div class="user-arrond rw-job-color-bgc-3">
                                <span>
                                    {{ $chartmodo->count() }}
                                </span>
                            </div>
                            <p class="txt-user">
                                Modérateurs
                            </p>
                        </div>
                        <div class="col-md-3">
                            <div class="user-arrond rw-job-color-bcg-test-4">
                                <span>
                                    {{ $chartadmin->count() }}
                                </span>
                            </div>
                            <p class="txt-user">
                                administrateurs
                            </p>
                        </div>

                        <h2 class="panel-title">Les <span class="red">4</span> derniers inscrits :</h2>
                        <div class="col-md-12">
                            <div class="">
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    @foreach($chartslast as $chartlast)
                                        <div class="col-md-6 col-sm-12 col-lg-6 panel-body">
                                            <div class="rw-charts-cards">
                                                <i class="fa fa-bookmark rw-job-color-txt-{{$chartlast->right_id}}"></i>
                                                {{($chartlast->right->name)}}

                                                @if($chartlast->emweb == 'on')
                                                    <span class="label label-info pull-right">
                                                        Emweb <i class="fa fa-check"></i>
                                                    </span>
                                                @else
                                                @endif
                                                @if($chartlast->asso == '1')
                                                    <span class="label label-default pull-right ">
                                                        Adhérent RW
                                                    </span>
                                                @else
                                                @endif

                                                <ul class="list-group">
                                                    <li class="list-group-item">
                                                        <i class="glyphicon glyphicon-user "></i>
                                                        {{$chartlast->first_name}} {{$chartlast->last_name}}
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span>
                                                            <i class="fa fa-user"></i>
                                                            {{$chartlast->username}}
                                                        </span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span>
                                                            <i class="fa fa-pencil-square-o"></i>
                                                            {{$chartlast->posts->count()}}
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <h2 class="panel-title">Inscrits par formation :</h2>
                        <div class="col-md-12">
                            <div class="">
                                <div class="panel-heading col-md-12 col-sm-12 col-lg-12">
                                    <ul class=" list-group list-inline col-md-12 rw-joblist">
                                        <li class="list-group-item-text col-md-2 rw-job-color-brd-left-1">
                                            Développeur : {{$usersdev->count()}}
                                        </li>
                                        <li class="list-group-item-text col-md-2 rw-job-color-brd-left-2">
                                            Designer : {{$usersdesign->count()}}
                                        </li>
                                        <li class="list-group-item-text col-md-2 rw-job-color-brd-left-3">
                                            Community Manager : {{$userscm->count()}}
                                        </li>
                                        <li class="list-group-item-text col-md-2 rw-job-color-brd-left-4">
                                            Webmarketeur : {{$userswm->count()}}
                                        </li>
                                        <li class="list-group-item-text col-md-2 rw-job-color-brd-left-5">
                                            Intégrateur : {{$usersinte->count()}}
                                        </li>
                                        <li class="list-group-item-text col-md-2 rw-job-color-brd-left-6">
                                            Référenceur : {{$usersref->count()}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
