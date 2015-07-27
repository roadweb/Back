@extends('admin.app')

@section('content')

    <div class="container">
        <!-- users développé par Kevin

        <div class="row">
            @foreach($users as $user)
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <div class="clearfix">
                            <div class="label label-primary">Admin</div>
                            <strong class="small pull-right">{{ $user->username }}</strong>
                        </div>
                        <img src="http://i2.wp.com/forum.frandroid.com/public/style_images/Humanoid_Reset/profile/default_large.png"
                             alt="..." class="img-circle">

                        <div class="caption">
                            <h4>{{ $user->last_name }} {{ $user->first_name }}</h4>

                            <p>{{ $user->email }}</p>

                            <button class="btn btn-default" 
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title="Les articles qu'il a publiés">
                                <span class="glyphicon glyphicon-edit"></span>  {{ $user->posts->count() }}
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        -->

         <!-- users développé par Céline -->
        <div class="row"> 
            <section class="col-lg-12">
                <table id="filter" class="table-bordered table-striped table-condensed col-lg-12">
                    <caption>
                        <h4>Les utilisateurs de Roadweb</h4>
                    </caption>
                    <thead>
                        <tr>
                            <th class="col-lg-1 skip-filter">Pseudo</th>
                            <th class="col-lg-1 skip-filter">Avatar</th>
                            <th class="col-lg-1 skip-filter">Nom</th>
                            <th class="col-lg-1 skip-filter">Prénom</th>
                            <th class="col-lg-1 skip-filter">Email</th>
                            <th class="col-lg-1 skip-filter">Blog</th>
                            <th class="col-lg-1 skip-filter">Articles</th>
                            <th class="col-lg-1">Formation</th>
                            <th class="col-lg-1">Abonnement</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->username}}</td>
                            <td><img src="{{$user->avatar}}" class="user-avatar thumbnail" /></td>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->first_name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->blogrw}}</td>
                            <td><button class="btn btn-default" 
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    title="voir les articles">
                                <span class="glyphicon glyphicon-edit"></span>  {{ $user->posts->count() }}
                            </button></td>
                            <td>{{$user->job->name}}</td>
                            <td>{{$user->right->name}}</td>
                        </tr>
                         @endforeach
                    </tbody>
                </table>
            </section>
        </div>

    </div>
@endsection