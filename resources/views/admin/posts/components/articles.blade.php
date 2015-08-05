@foreach($posts as $post)
    <div class="row">


        <div class="col-sm-8">
            <div class="panel panel-{{ sticky($post->is_sticky, 'danger') }}">

                <div class="panel-heading">
                    {{ str_limit($post->title, $limit = 40, $end = '...') }}
                    @if($post->published)
                        <span class="pull-right label label-success">Publié</span>
                    @else
                        <span class="pull-right label label-default">Non publié</span>
                    @endif
                    <span class="pull-right label">Mis à jour : {{ $post->updated_at }}</span>
                </div>

                <div class="panel-body">
                    {{ str_limit($post->resume, $limit = 70, $end = '...') }}
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
                    Auteur : {{ $post->user->last_name }} {{ $post->user->first_name }}
                    <span class="pull-right label label-info">{{ $post->category->name }}</span>
                    <span class="pull-right label rw-job-color-bgc-{{$post->job_id}}">{{$post->job->name}}</span>
                </div>
                <div class="panel-body">
                    {!! Form::open([
                    'url' => route('admin.posts.destroy', $post->id),
                    'method' => 'DELETE',
                    'class' => 'inline-block'
                    ]) !!}

                    <a href="{{ route('admin.posts.show', $post->id) }}"
                       class="btn btn-sm btn-info"
                       data-toggle="tooltip"
                       title="Voir l'article"
                       data-placement="top">
                        <span class="glyphicon glyphicon-eye-open"></span>
                    </a>
                    <a href="{{ route('admin.posts.edit', $post->id) }}"
                       class="btn btn-sm btn-warning"
                       data-toggle="tooltip"
                       title="Éditer l'article"
                       data-placement="top">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <button class="btn btn-sm btn-danger"
                            type="submit"
                            data-toggle="tooltip"
                            title="Supprimer l'article"
                            data-confirm="delete"
                            data-text="Voulez-vous vraiment supprimer cet article ?"
                            data-confirm-button="Oui"
                            data-cancel-button="Mince, non !"
                            data-placement="top"><span class="glyphicon glyphicon-trash"></span></button>
                    {!! Form::close() !!}

                    {!! Form::open([
                    'url' => route('admin.posts.update', $post->id),
                    'method' => 'PUT',
                    'class' => 'inline-block'
                    ]) !!}

                    @if($post->published)
                        <input type="hidden" name="publication" value="0"/>
                        <button class="btn btn-sm btn-neutral"
                                type="submit"
                                data-toggle="tooltip"
                                title="Dépublier l'article"
                                data-placement="top"><span class="glyphicon glyphicon-open"></span></button>
                    @else
                        <input type="hidden" name="publication" value="on"/>
                        <button class="btn btn-sm btn-success"
                                type="submit"
                                data-toggle="tooltip"
                                title="Publier l'article"
                                data-placement="top"><span class="glyphicon glyphicon-save"></span></button>
                    @endif
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endforeach