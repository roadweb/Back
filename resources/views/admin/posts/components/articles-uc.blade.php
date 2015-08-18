@if(count($posts_uc) == 1)
            <h2 class="text-center"><span class="red">{{$posts_uc->count()}} article</span> à valider</h2>
        @elseif(count($posts_uc) >= 2)
            <h2 class="text-center"><span class="red">{{$posts_uc->count()}} articles</span> à valider</h2>
        @else
            <h2 class="text-center">Aucun article en attente de validation</h2>
        @endif

        @foreach($posts_uc as $post)
        <div class="col-sm-12">
            <div class="panel panel-default }}">

                <div class="panel-heading rw-job-color-bcg-test-{{ $post->job->id}}">
                    <h3>{{ str_limit($post->title, $limit = 40, $end = '...') }}
                        <span class="inline-block label label-info">Par <strong>{{ $post->user->username }}</strong></span>
                        @if ($post->is_sticky === 'on')
                            <span class="inline-block label label-sticky">Mis en avant</span>
                        @endif
                    </h3>        
                </div>

                <div class="panel-body">
                    <p class="text-justify">{{ $post->resume }}</p>
                </div>

                <div class="panel-footer">
                    
                    <p class="rw-articles-index-maj inline-block">
                        Édité le {{ $post->updated_at->format('d') . ' ' . dateConvert($post->updated_at->format('F')) . ' ' . $post->updated_at->format('Y') }}
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