@foreach($posts as $post)
    <div class="row">
        <div class="col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $post->title }}
                    <span class="pull-right">
                                        <small>Mis à jour le: {{ $post->updated_at }}</small>
                                    </span>
                </div>
                <div class="panel-body">
                    {{ $post->content }}
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Auteur : {{ $post->user->last_name }} {{ $post->user->first_name }}
                    <span class="pull-right">
                                        <span class="label label-info">{{ $post->category->name }}</span>
                                    </span>
                </div>
                <div class="panel-body">
                    {!! Form::open([
                    'url' => route('posts.destroy', $post->id),
                    'method' => 'DELETE',
                    ]) !!}
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default">Editer</a>
                    <button class="btn btn-danger" type="submit">Suprimer</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endforeach