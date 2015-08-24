@extends('admin.app')

@section('content')

    <div class="container rw-users-table">
        <!-- users développé par Céline -->
        <div class="row">
                <section class="col-lg-12" id="filter">
                <table id="example" class="table-bordered table-condensed col-lg-12">
                    <caption>
                        <h4>Les utilisateurs de Roadweb</h4>
                    </caption>
                    <thead>
                        <tr>
                            <th class="col-lg-1 skip-filter">Pseudo</th>
                            <th class="col-lg-1 skip-filter">Avatar</th>
                            <th class="col-lg-2 skip-filter">Nom </th>
                            <th class="col-lg-2 skip-filter">Date d'inscription</th>
                            <th class="col-lg-2 skip-filter">Email</th>
                            {{--<th class="col-lg-1 skip-filter">Blog</th>--}}
                            <th class="col-lg-1 skip-filter">Articles</th>
                            <th class="col-lg-2">Formation</th>
                            <th class="col-lg-1">Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->username}}</td>
                            <td><img src="{{asset($user->avatar)}}" class="user-avatar thumbnail" /></td>
                            <td>{{$user->first_name . ' ' . $user->last_name}}</td>
                            <td>{{$user->created_at->format('d') . ' ' . dateConvert($user->created_at->format('F')) . ' ' . $user->created_at->format('Y')}}</td>
                            <td>{{$user->email}}</td>
                            {{--<td>{{$user->blogrw}}</td>--}}
                            <td><a href="{{URL::to('/monblog', ['id' => $user->id, 'username' => $user->username])}}">
                                <span class="glyphicon glyphicon-edit"></span>  {{ $user->posts->count() }}
                            </a></td>
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