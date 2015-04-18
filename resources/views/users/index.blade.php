@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            @foreach($users as $user)
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <div class="clearfix">
                            <span class="label label-primary text-right">Admin</span>
                            <strong class="small pull-right">{{ $user->username }}</strong>
                        </div>
                        <img src="http://i2.wp.com/forum.frandroid.com/public/style_images/Humanoid_Reset/profile/default_large.png"
                             alt="..." class="img-circle">

                        <div class="caption">
                            <h4>{{ $user->last_name }} {{ $user->first_name }}</h4>

                            <p>{{ $user->email }}</p>

                            <p>
                                <button class="btn btn-default"><span class="glyphicon glyphicon-edit"></span></button>
                                <a href="#" class="btn btn-default" role="button">Button</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection