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

         <table class="table condensed">

         </table>


    </div>
@endsection