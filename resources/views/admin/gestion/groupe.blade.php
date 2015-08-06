@extends('admin.app')

@section('content')

    <div class="container">

        <!-- gestion développé par Pauline & Céline -->
        <div class="row"> 
            <section class="col-lg-12">

                @if(isset($user))
                    {!! Form::model($user, ['route' => ['gestion.update', $user->id], 'method' => 'patch']) !!}
                @endif

                <h4>Groupe <span style="color:red;">{{$groupe->name}}</span> : </h4>

                <table class="table-bordered table-striped table-condensed col-lg-12">

                    {!! Form::label('add_user', 'Ajouter un utilisateur :') !!}
                    {!! Form::text('add', null, array('id' => 'add_user')) !!}

                    {!! Form::submit('Ajouter l\'utilisateur au groupe', array('name' => 'add_user_action')) !!}
                    <thead>
                        <tr>
                            <th class="col-lg-1">Pseudo</th>
                            <th class="col-lg-1">Prénom Nom</th>
                            <th class="col-lg-1">Email</th>
                            <th class="col-lg-1">Emweb</th>                            
                            <th class="col-lg-1">Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->username}}</td>
                            <td>{{$user->first_name}} {{$user->last_name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->emweb}}</td>
                            <td class="checkbox checkbox-success">
                                {!! Form::checkbox('delete', $user->id, false, ["id" =>"checkbox", "class" => "checkbox checkbox-success", "placeholder" => ''])!!}
                                {!! Form::label('checkbox', ' ') !!}
                            </td>
                        </tr>
                         @endforeach
                    </tbody>
                </table>

                {!! Form::submit('Supprimer la sélection', ["id" => "rw-cpt-btn-submit-infos"]) !!}

                {!! Form::close() !!}
            </section>
        </div>

    </div>
@endsection