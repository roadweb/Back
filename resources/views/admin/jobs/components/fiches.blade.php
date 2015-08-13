    <div class="row rw-metiers-fiches">

        <h2>
            <span>
                {{$fiches->count()}} fiches métiers
            </span>
             sur Road Web
        </h2>

        @foreach($fiches as $fiche)
        <div class="col-sm-4">
            <div class="panel panel-default)">

                <div class="panel-heading rw-job-color-bgc-{{$fiche->id}}">
                    {{ $fiche->name }}

                    <span class="pull-right label">Mis à jour :
                        {{$fiche->updated_at->format('d')}}
                        {{dateConvert($fiche->updated_at->format('F'))}}
                        {{$fiche->updated_at->format('Y')}}
                    </span>
                </div>

                <div class="panel-body">
                    {{ $fiche->resume }}
                </div>

                <div class="panel-footer">

                    {!! Form::open(['url' => route('admin.metiers.update', $fiche->id)]) !!}
                    <a href="{{ route('admin.metiers.edit', $fiche->id) }}"
                       class="btn btn-sm btn-default"
                       data-toggle="tooltip"
                       title="Éditer l'article"
                       data-placement="top">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        <!--
        |--------------------------------------------------------------------------
        | Colonne d'action et d'infos sur l'auteur
        |--------------------------------------------------------------------------
        *-->

        {{--<div class="col-sm-4">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">--}}

                {{--</div>--}}
                {{--<div class="panel-body">--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        @endforeach
    </div>
