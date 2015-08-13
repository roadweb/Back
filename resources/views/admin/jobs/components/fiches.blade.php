@foreach($fiches as $fiche)
    <div class="row">


        <div class="col-sm-8">
            <div class="panel panel-default) }}">

                <div class="panel-heading">
                    {{ $fiche->name }}
                    <span class="pull-right label">Mis à jour : {{ $fiche->updated_at }}</span>
                </div>

                <div class="panel-body">
                    {{ $fiche->resume }}
                </div>
            </div>
        </div>

        <!--
        |--------------------------------------------------------------------------
        | Colonne d'action et d'infos sur l'auteur
        |--------------------------------------------------------------------------
        *-->

        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">

                </div>
                <div class="panel-body">
                    {!! Form::open(['url' => route('admin.metiers.update', $fiche->id)]) !!}
                    <a href="{{ route('admin.metiers.edit', $fiche->id) }}"
                       class="btn btn-sm btn-warning"
                       data-toggle="tooltip"
                       title="Éditer l'article"
                       data-placement="top">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endforeach