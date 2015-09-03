@extends('admin.app')

@section('content')

    <div class="container">

        <!-- gestion développé par Pauline & Céline-->
        <div class="row"> 
            <section class="col-lg-12">
                <table class="table-bordered table-striped table-condensed col-lg-12">
                    <caption>
                        <h4>Les groupes utilisateurs de Roadweb</h4>
                    </caption>
                    <thead>
                        <tr>
                            <th class="col-lg-4">Groupe</th>
                            <th class="col-lg-4">Nombre d'utilisateurs</th>
                            <th class="col-lg-4">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($groupes as $groupe)
                        <tr>
                            <td>{{$groupe->name}}</td>
                            <td>{{$groupe->users->count()}}</td>
                            <td><a href="groupe/{{$groupe->id}}">Gérer</a></td>
                        </tr>
                         @endforeach
                    </tbody>
                </table>
            </section>
            <section class="col-lg-12">
                <h4>Les membres de l'association Roadweb</h4>

                <table class="table-bordered table-striped table-condensed col-lg-12">
                    {!! Form::open(array('route' => 'gestion_utilisateur')) !!}
                    {!! Form::label('add_user', 'Ajouter un utilisateur :') !!}
                    {!! Form::text('username', null, array('id' => 'add_user')) !!}
                    {!! Form::hidden('groupe_id', $groupe->id) !!}
                    {!! Form::submit('Ajouter l\'adhérent', array('name' => 'add_user_action')) !!}
                    {!! Form::close() !!}
                    <thead>
                        <tr>
                            <th class="col-lg-4">Pseudo</th>
                            <th class="col-lg-4">Date de l'adhésion</th>
                            <th class="col-lg-4">Fin de l'adhésion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($groupes as $groupe)
                        <tr>
                            <td>{{$groupe->name}}</td>
                            <td>{{$groupe->users->count()}}</td>
                            <td><a href="groupe/{{$groupe->id}}">Gérer</a></td>
                        </tr>
                         @endforeach
                    </tbody>
                </table>
            </section>
        </div>

    </div>
@endsection