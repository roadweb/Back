@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tache à faire
                    </div>
                    <div class="panel-body">
                        Ici on listera tous les tutoriaux
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <a href="{{ route('tutorial.create') }}" class="btn btn-success">
                    <i class="glyphicon glyphicon-plus"></i> Créer un nouveau tutoriel
                </a>
            </div>
        </div>
    </div>
@endsection