

<div class="row">

    <div class="col-lg-4 col-md-6 col-sm-6">
        @if(count($posts_off) == 1)
            <h2 class="text-center">{{$posts_off->count()}} article non publié</h2>
        @elseif(count($posts_off) >= 2)
            <h2 class="text-center">{{$posts_off->count()}} articles non publiés</h2>
        @else
            <h2 class="text-center">Aucun article non publié</h2>
        @endif

        @foreach($posts_off as $post)
        <div class="col-sm-12">
            <div class="panel panel-default }}">

                <div class="panel-heading rw-job-color-bgc-{{ $post->job->id}}">
                    <h3>{{ str_limit($post->title, $limit = 40, $end = '...') }}
                        @if ($post->is_sticky === 'on')
                            <span class="pull-right label label-sticky">Mis en avant</span>
                        @endif
                        <span class="pull-right label label-info">Auteur : <strong>{{ $post->user->username }}</strong></span>

                    </h3>                    
                </div>

                <div class="panel-body">
                    <p class="text-justify">{{ $post->resume }}</p>
                </div>

                <div class="panel-footer">
                    
                    <p class="rw-articles-index-maj inline-block">
                        Dernière édition le {{ $post->updated_at->format('d') . ' ' . dateConvert($post->updated_at->format('F')) . ' ' . $post->updated_at->format('Y') }}
                    </p>
                    
                    {!! Form::open([
                    'url' => route('admin.posts.update', $post->id),
                    'method' => 'PUT',
                    'class' => 'inline-block pull-right'
                    ]) !!}

                    <input type="hidden" name="publication" value="uc"/>
                        <button class="btn btn-sm btn-primary"
                                type="submit"
                                data-toggle="tooltip"
                                title="Soumettre à validation"
                                data-placement="top">
                            <span class="glyphicon glyphicon-share"></span>
                        </button>
                    {!! Form::close() !!}

                    {!! Form::open([
                    'url' => route('admin.posts.destroy', $post->id),
                    'method' => 'DELETE',
                    'class' => 'inline-block pull-right'
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
                </div>

            </div>
        </div>
        @endforeach
    </div>

    <div class="col-md-4">
        @if(count($posts_uc) == 1)
            <h2 class="text-center">{{$posts_uc->count()}} article en attente de validation</h2>
        @elseif(count($posts_uc) >= 2)
            <h2 class="text-center">{{$posts_uc->count()}} articles en attente de validation</h2>
        @else
            <h2 class="text-center">Aucun article en attente de validation</h2>
        @endif

        @foreach($posts_uc as $post)
        <div class="col-sm-12">
            <div class="panel panel-default }}">

                <div class="panel-heading rw-job-color-bgc-{{ $post->job->id}}">
                    <h3>{{ str_limit($post->title, $limit = 40, $end = '...') }}
                        @if ($post->is_sticky === 'on')
                        <span class="pull-right label label-sticky">Mis en avant</span>
                    @endif
                        <span class="pull-right label label-info">Auteur : <strong>{{ $post->user->username }}</strong></span>

                    </h3>                    
                </div>

                <div class="panel-body">
                    <p class="text-justify">{{ $post->resume }}</p>
                </div>

                <div class="panel-footer">
                    
                    <p class="rw-articles-index-maj inline-block">
                        Dernière édition le {{ $post->updated_at->format('d') . ' ' . dateConvert($post->updated_at->format('F')) . ' ' . $post->updated_at->format('Y') }}
                    </p>
                    
                    {!! Form::open([
                    'url' => route('admin.posts.update', $post->id),
                    'method' => 'PUT',
                    'class' => 'inline-block pull-right'
                    ]) !!}

                    @if (Auth::user()->right_id >= '3')
                        <input type="hidden" name="publication" value="on"/>
                        <button class="btn btn-sm btn-success"
                                type="submit"
                                data-toggle="tooltip"
                                title="Publier l'article"
                                data-placement="top">
                            <span class="glyphicon glyphicon-save"></span>
                        </button>
                    
                    @else
                    <input type="hidden" name="publication" value="0"/>
                        <button class="btn btn-sm btn-primary"
                                type="submit"
                                data-toggle="tooltip"
                                title="Retirer de la liste"
                                data-placement="top">
                            <span class="glyphicon glyphicon-remove-circle"></span>
                        </button>
                    @endif
                    {!! Form::close() !!}

                    {!! Form::open([
                    'url' => route('admin.posts.destroy', $post->id),
                    'method' => 'DELETE',
                    'class' => 'inline-block pull-right'
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
                </div>

            </div>
        </div>
        @endforeach
    </div>

    <div class="col-md-4">
        @if(count($posts_on) == 1)
            <h2 class="text-center">{{$posts_on->count()}} article publié</h2>
        @elseif(count($posts_on) >= 2)
            <h2 class="text-center">{{$posts_on->count()}} articles publiés</h2>
        @else
            <h2 class="text-center">Aucun article publié</h2>
        @endif

        @foreach($posts_on as $post)
        <div class="col-sm-12">
            <div class="panel panel-default">

                <div class="panel-heading rw-job-color-bgc-{{ $post->job->id}}">
                    <h3>{{ str_limit($post->title, $limit = 40, $end = '...') }}
                        @if ($post->is_sticky === 'on')
                            <span class="pull-right label label-sticky">Mis en avant</span>
                        @endif
                        <span class="pull-right label label-info">Auteur : <strong>{{ $post->user->username }}</strong></span>

                    </h3>                    
                </div>

                <div class="panel-body">
                    {{ $post->resume }}
                </div>

                <div class="panel-footer">

                    <p class="rw-articles-index-maj inline-block">
                        Dernière édition le {{ $post->updated_at->format('d') . ' ' . dateConvert($post->updated_at->format('F')) . ' ' . $post->updated_at->format('Y') }}
                    </p>

                    {!! Form::open([
                    'url' => route('admin.posts.update', $post->id),
                    'method' => 'PUT',
                    'class' => 'inline-block pull-right'
                    ]) !!}
                    
                        <input type="hidden" name="publication" value="0"/>
                        <button class="btn btn-sm btn-primary"
                                type="submit"
                                data-toggle="tooltip"
                                title="Dépublier"
                                data-placement="top"><span class="glyphicon glyphicon-open"></span></button>
                  
                    {!! Form::close() !!}

                    {!! Form::open([
                    'url' => route('admin.posts.destroy', $post->id),
                    'method' => 'DELETE',
                    'class' => 'inline-block pull-right'
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

                </div>

            </div>
        </div>
        @endforeach
    </div>

</div>