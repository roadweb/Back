@extends('admin.app')

@section('content')

    <div class="container-fluid">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    POSTS > [<span class="text-info"> Total: {{ $posts }} </span>]
                </div>
                <div class="panel-body">
                    <span class="col-sm-12"><span class="text-info">publiés: </span>{{ $posts_published }}</span>
                    <span class="col-sm-12"><span class="text-info">stickés: </span>{{ $posts_sticky }}</span>
                    <span class="col-sm-12"><span class="text-info">en cours d'édition: </span>{{ $posts_editing }}</span>
                    <span class="col-sm-12"><span class="text-info">... : </span>infos</span>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    USERS > [<span class="text-info"> Total: {{ $users }} </span>]
                </div>
                <div class="panel-body">
                    <span class="col-sm-12"><span class="text-info">élèves: </span>{{ $users }}</span>
                    <span class="col-sm-12"><span class="text-info">abonnés: </span>{{ $users }}</span>
                    <span class="col-sm-12"><span class="text-info">... : </span>infos</span>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    OVERVIEW:[<span class="text-info"> Ici : une liste de staitistiques synthétisant l'activité du site </span>]
                </div>
                <div class="panel-body">
                    <span class="col-sm-12"><span class="text-info">Nombre de questions: </span>{{ $questions }}</span>
                    <span class="col-sm-12"><span class="text-info">... : </span>infos</span>
                </div>
            </div>
        </div>
    </div>
@stop



