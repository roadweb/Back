@extends('admin.app')

@section('content')

    <div class="container">

         <!-- gestion développé par Pauline -->
        <div class="row"> 
            <section class="col-lg-12">
                <table id="filter" class="table-bordered table-striped table-condensed col-lg-12">
                    <caption>
                        <h4>Les utilisateurs de Roadweb</h4>
                    </caption>
                    <thead>
                        <tr>
                            <th class="col-lg-1 skip-filter">Pseudo</th>
                            <th class="col-lg-1 skip-filter">Prénom Nom</th>
                            <th class="col-lg-1 skip-filter">Emweb</th>
                            <th class="col-lg-1 skip-filter">Email</th>
                            <th class="col-lg-1">Abonnement</th>
                        </tr>
                    </thead>
                    @if(isset($user))
                        {!! Form::model($user, ['route' => ['compte.update', $user->id], 'method' => 'patch']) !!}

                    @else
                        {!! Form::open(['route' => ['compte.store']]) !!}
                    @endif

                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->username}}</td>
                            <td>{{$user->first_name}} {{$user->last_name}}</td>
                            <td>{{$user->emweb}}</td>
                            <td>{{$user->email}}</td>
                            <td>{!! Form::text($user->right_id, null, ["class" => "rw-cpt-input", "placeholder" => ''])!!}
                            </td>
                        </tr>
                         @endforeach
                    </tbody>
                    {!! Form::submit('Sauvegarder les informations', ["id" => "rw-cpt-btn-submit-infos"]) !!}

                    {!! Form::close() !!}

                </table>
            </section>
        </div>

    </div>
@endsection