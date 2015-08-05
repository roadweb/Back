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
        </div>

    </div>
@endsection